<?php

declare(strict_types=1);

namespace App\Models\Services;

use App\Http\Collectors\_Traits\Filterable;
use App\Models\Province;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Casts\Attribute;

trait OfferService
{
    use Filterable;

    protected int $pagination = 15;

    public function scopeTopOffers(Builder $query, int $perPage)
    {
        return $query
            ->select('offers.*')
            ->selectRaw('ranking - TIMESTAMPDIFF(DAY, date, CURDATE()) AS jrank')
            ->with([
                'languages:id,name',
                'regions:id,name',
                'provinces:id,name',
                'categories:id,name,type',
            ])
            ->take($perPage)
            ->get();
    }

    /**
     * Search jobs
     */
    public function scopeSearchOffers(Builder $query, array $idFields = [], array $searchFields = [], array $optionFields = [], bool $is_search = false): Builder
    {
        // Get the values
        [$category, $province, $language] = $this->arrayConstructorOrReset($idFields, 3);
        [$search, $locations] = $this->arrayConstructorOrReset($searchFields, 2);
        [$workday, $salary] = $this->arrayConstructorOrReset($optionFields, 2);

        // Empty results
        if ($is_search && is_null($search) && is_null($locations)) {
            return $query->where('id', '0000011111');
        }

        // Sql query
        return $query
            ->select('offers.*')
            ->selectRaw('ranking - TIMESTAMPDIFF(DAY, date, CURDATE()) AS jrank')
            ->with([
                'languages:id,name',
                'regions:id,name',
                'provinces:id,name',
                'categories:id,name,type',
            ])
            ->when($category, function ($query, $category): void {
                $query->whereCategoryId($category);
            })
            ->when($language, function ($query, $language): void {
                $query->whereLanguageId($language);
            })
            ->when($province, function ($query, $province): void {
                $query->whereProvinceId($province);
            })
            ->when($locations, function ($query, $locations) {

                // Search province
                $filteredLocations = self::filterLocations($locations);
                $province = Province::searchByName($filteredLocations)->id;

                $query
                    ->when($province, function ($query, $province) {
                        $query->where('province_id', $province);
                    });
            })
            ->when($workday, function ($query, $workday) {
                $query->where(function ($query) use ($workday) {
                    foreach ($workday as $value) {
                        $query->orWhere('workday_type', 'LIKE', '%'.$value.'%');
                    }
                });
            })
            ->when($salary, function ($query, $salary) {
                return $this->betweenSalary($query, $salary);
            })
            ->when($search, function ($query, $search): void {
                $query
                    ->whereFullText('title', $search)
                    ->orWhereFullText('description', $search);
            })
            ->when($search, function ($query, $search) {
                $query
                    ->whereFullText('title', $search)
                    ->orWhereFullText('description', $search);
            })
            ->orderBy('jrank', 'desc')
            ->orderBy('salary_year', 'desc');
    }

    public function scopeTopSalary($query)
    {
        return $query
            ->select('company', 'category_id', 'salary_year')
            ->with(['categories:name,id'])
            ->distinct('category_id')
            ->orderBy('salary_year', 'desc')
            ->get()
            ->unique('category_id')
            ->take(5);
    }

    /*
     * Accessors & Mutators
     */

    /**
     * Get offer location
     */
    protected function locations(): Attribute
    {
        $region = optional($this->regions)->name ? sprintf(' (%s)', optional($this->regions)->name) : '';
        $province = optional($this->provinces)->name;

        return Attribute::make(
            get: fn ($value) => sprintf('%s%s', $province, $region),
        );
    }

    /**
     * Get offer location
     */
    protected function diffDays(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => $this->updated_at->diffInDays($this->date),
        );
    }

    private function betweenSalary(Builder $query, ?int $salary)
    {
        if ($salary) {
            return match ($salary) {
                1 => $query->where('salary_year', '>=', '40000'),
                2 => $query->whereBetween('salary_year', [35000, 40000]),
                3 => $query->whereBetween('salary_year', [30000, 35000]),
                4 => $query->whereBetween('salary_year', [25000, 30000]),
                5 => $query->whereBetween('salary_year', [20000, 25000]),
                6 => $query->whereBetween('salary_year', [10000, 20000]),
                7 => $query->where('salary_year', '>', 0)->where('salary_year', '<', '10000'),
                8 => $query->where(function ($query) {
                    $query->whereNull('salary_year')->orWhere('salary_year', '=', '');
                }
                ),
                default => $query,
            };
        }
    }

    private function arrayConstructorOrReset(array $value, int $items)
    {
        if (count($value) <= 0) {
            for ($x = 0; $x < $items; $x++) {
                array_push($value, null);
            }

            return $value;
        }

        return $value;
    }
}
