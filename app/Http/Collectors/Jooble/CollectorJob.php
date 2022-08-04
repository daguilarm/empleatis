<?php

declare(strict_types=1);

namespace App\Http\Collectors\Jooble;

use App\Models\Offer;
use Illuminate\Bus\Queueable;
use App\Http\Collectors\Ranking;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use App\Http\Collectors\_Traits\Errorable;
use App\Http\Collectors\_Traits\Helpeable;
use App\Http\Collectors\_Traits\Filterable;
use App\Http\Collectors\_Traits\Optionable;
use App\Http\Collectors\_Traits\Regionable;
use App\Http\Collectors\_Traits\Salaryable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use App\Http\Collectors\_Traits\Requestable;
use App\Http\Collectors\AbstractCollectorJob;

class CollectorJob extends AbstractCollectorJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
    use Errorable, Filterable, Helpeable, Optionable, Regionable, Requestable, Salaryable;

    /**
     * Set the partner ID
     */
    protected int $partnerID = 2;

    protected string $category_name;

    protected ?int $category_id;

    protected int $page;

    protected ?string $language_name;

    protected ?int $language_id;

    /**
     * Create a new job instance.
     *
     * @param  object  $response
     * @return void
     */
    public function __construct(object $category, int $page, ?object $language)
    {
        $this->category_name = $category->search_name;
        $this->category_id = (int) $category->id;
        $this->page = $page;
        $this->language_name = $language->name ?? null;
        $this->language_id = (int) $language?->id ?? null;
    }

    /**
     * Execute the job.
     *
     * @return void|null
     */
    public function handle()
    {
        // Get the response from the API
        $response = (new Response([$this->language_name ?? $this->category_name], $this->page))
            ->connection()
            ->asJson()
            ->headers()
            ->post();

        if (isset($response?->jobs)) {
            foreach ($response->jobs as $values) {
                // Get the values
                $values = $this->map($values, $this->category_name, $this->category_id);

                if (! isset($values['salary'])) {
                    return null;
                }

                // Check for a slave job
                // Dont want infra jobs
                $skip = str_contains($values['salary'], 'day') || str_contains($values['salary'], 'día') || str_contains($values['salary'], 'dia');

                // Insert the values if is a decent job
                if (Offer::whereCode($values['code'])->count() <= 0 && $skip === false) {
                    Offer::create($values);
                }
            }
        }
    }

    /**
     * Set all the values
     *
     * @return array|null
     */
    protected function map(object $values, string $category_name, int $category_id, float $ranking = 0.00)
    {
        // This elements is not good enought
        if (self::filterElement($this->category_name, $values, $this->language_name) === false) {
            return null;
        }

        // Get locations
        $filteredLocations = self::filterLocations($values->location);
        $locations = self::searchProvince($filteredLocations);

        // Calculate salaries
        [$salary_max, $salary_min, $salary_year] = self::calculateSalary($values?->salary);

        // Workday
        $workday = self::calculateWorkingDay($values?->type);

        // Calculate the ranking
        $ranking = app(Ranking::class)
            ->ranking()
            ->category_r($category_name)
            ->title_r($values->title)
            ->url_r($values->link)
            ->description_r($values->snippet)
            ->salary_year_r($salary_year)
            ->workday_r($workday)
            ->get();

        return [
            'title' => $values->title,
            'description' => $values->snippet,
            'url' => $values->link,
            'code' => md5($values->link),
            'company' => $values?->company ?? null,
            'source' => $this->scoreSource($values?->source),
            'date' => self::formatDate($values?->updated),
            'salary' => self::formatSalary($values?->salary),
            'salary_max' => $salary_max,
            'salary_min' => $salary_min,
            'salary_currency' => '€',
            'salary_year' => $salary_year,
            'workday_type' => $workday,
            'category_id' => $category_id,
            'language_id' => $this->language_id ?? null,
            'partner_id' => $this->partnerID,
            'locations' => $filteredLocations,
            'province_id' => $locations->id ?? 0,
            'region_id' => self::searchRegion($locations?->region_id, $filteredLocations),
            'ranking' => $ranking,
            'error_salary' => self::errorSalary($salary_max),
        ];
    }

    private function scoreSource(?string $value = null)
    {
        if ($value === 'jooble') {
            return 'jooble.com';
        }

        return $value ?? 'jooble.com';
    }
}
