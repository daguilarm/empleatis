<?php

declare(strict_types=1);

namespace App\Models\Services;

use Illuminate\Contracts\Database\Eloquent\Builder;
use Illuminate\Support\Collection;

trait LinkService
{
    /**
     * List of categories
     */
    public function scopeIsInDatabase(Builder $query, string $id, string $referer): Collection
    {
        return self::query()
            ->whereOfferId($id)
            ->whereReferer($referer)
            ->get();
    }
}
