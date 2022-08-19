<?php

declare(strict_types=1);

namespace App\Http\Livewire;

use App\Models\Offer;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Collection;
use Livewire\Component;

class Search extends Component
{
    public Collection $config;

    public array $optionFields;

    public ?string $search = null;

    public ?string $locations = null;

    protected $listeners = ['optionFields', 'searchFields'];

    /**
     * Set default config value
     */
    public function mount(Collection $config): void
    {
        $this->config = $config;
        $this->optionFields = [null, null, null, null, null];
    }

    /**
     * Render the view
     */
    public function render()
    {
        // Get the data
        $results = $this->results();
        [$categories, $provinces] = $this->relationship($results);

        return view('components.livewire.results')
            ->with('results', $this->pagination($results))
            ->with('results_categories', $categories)
            ->with('results_provinces', $provinces)
            ->with('config', $this->config);
    }

    /**
     * Get the option fields for the results.
     * This data came from the event
     */
    public function optionFields(array $values = [null])
    {
        $this->optionFields = $values;
    }

    /**
     * Get the search fields for the results.
     * This data came from the event
     */
    public function searchFields(array $values = [null, null])
    {
        $this->search = $values[0];
        $this->locations = $values[1];
    }

    /**
     * Get the results from the model.
     * Results base on the request parameters.
     */
    private function results(): Collection
    {
        // Delay a 0.3s
        usleep(300000);


        return Offer::searchOffers(
            $this->idFields(),
            $this->optionFields,
            false,
            $this->search,
            $this->locations
        )
            ->get();
    }

    /**
     * Paginate results from a Collection
     */
    private function pagination(Collection $data): LengthAwarePaginator
    {
        // Get values
        $perPage = $this->config->get('perPage');
        $page = request('page') ?? Paginator::resolveCurrentPage();

        // Custom pagination
        return new LengthAwarePaginator(
            $data->forPage($page, $perPage),
            $data->count(),
            $perPage,
            $page,
            [
                'path' => url()->current(),
                'pageName' => 'page',
            ]
        );
    }

    /**
     * Get the results from related tables.
     * This are the filter values: provinces and categories base on the results.
     */
    private function relationship(Collection $offers): array
    {
        // If not in home
        if ($this->config->get('section') !== 'home') {
            // Make a second query with all the results
            $data = Offer::query()
                ->searchOffers([], [], true)
                ->get();

            // Get the relationships
            return [
                $data->pluck('categories')->unique(),
                $data->pluck('provinces')->unique(),
            ];
        }

        // If home
        // Use the current search to get the relationship values
        return [
            $offers->pluck('categories')->unique(),
            $offers->pluck('provinces')->unique(),
        ];
    }

    /**
     * Get the id fields for the results
     */
    private function idFields(): array
    {
        return [
            $this->config->get('category'),
            $this->config->get('province'),
            $this->config->get('language'),
        ];
    }
}
