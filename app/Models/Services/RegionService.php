<?php

declare(strict_types=1);

namespace App\Models\Services;

trait RegionService
{
    use HelperService;

    /**
     * Search region from database
     */
    public function scopeSearchByName($query, ?int $region, string $search): int
    {
        if (isset($region) && is_numeric($region) && $region > 0) {
            return $region;
        }

        $region = $query->where(function ($query) use ($search): void {

            // Search in multiples locations
            $locations = explode(',', $search);

            foreach ($locations as $location) {
                $query->orWhereRaw('UPPER(alt_name) LIKE ?', self::formatValueForQuery($location));
            }
        })
            ->first();

        return $region?->id ?? 0;
    }
}
