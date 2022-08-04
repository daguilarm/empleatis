<?php

declare(strict_types=1);

namespace App\Models\Services;

use App\Models\Province;
use Illuminate\Contracts\Database\Eloquent\Builder;
use Illuminate\Support\Collection;

trait ProvinceService
{
    use HelperService;

    /**
     * List of categories
     */
    public function scopeSearch(Builder $query, Collection $offers): Collection
    {
        return $offers->pluck('provinces')->unique();
    }

    /**
     * Search category by name (search name)
     */
    public static function searchByName(string $province): ?Province
    {
        return self::where(function ($query) use ($province): void {

            // Search in multiples locations
            $locations = explode(',', $province);

            foreach ($locations as $location) {
                $query->orWhereRaw('UPPER(alt_name) LIKE ?', self::formatValueForQuery($location));
            }
        })
            ->first();
    }
}
