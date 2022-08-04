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
    public function scopeSearchOffers(Builder $query, array $idFields = [null, null, null], array $searchFields = [null, null], array $optionFields = [null], bool $is_search = false): Builder
    {
        // Get the values
        [$category, $province, $language] = $idFields;
        [$search, $locations] = $searchFields;
        [$workday] = $optionFields;

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
            ->when($search, function ($query, $search): void {
                $query
                    ->where('title', 'LIKE', '%'.$search.'%')
                    ->orWhere('description', 'LIKE', '%'.$search.'%');
            })
            ->when($province, function ($query, $province): void {
                $query->whereProvinceId($province);
            })
            ->when($search, function ($query, $search) {
                $query
                    ->where('title', 'like', ' %'.$search.'% ')
                    ->orWhere('description', 'like', ' %'.$search.'% ');
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
            ->when($workday, function($query, $workday) {
                foreach($workday as $key => $value) {
                    $query->whereJsonContains('workday_id', $value);
                }
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
        $region = $this->regions?->name ? sprintf(' (%s)', $this->regions?->name) : '';
        $province = $this->provinces?->name;

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
}
