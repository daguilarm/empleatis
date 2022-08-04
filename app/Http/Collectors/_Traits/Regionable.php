<?php

declare(strict_types=1);

namespace App\Http\Collectors\_Traits;

use App\Models\Province;
use App\Models\Region;

trait Regionable
{
    /**
     * Search province from database
     */
    private function searchProvince(string $search): ?Province
    {
        return Province::searchByName($search);
    }

    /**
     * Search region from database
     */
    private function searchRegion(?int $region, string $search): int
    {
        return Region::query()
            ->searchByName($region, $search);
    }
}
