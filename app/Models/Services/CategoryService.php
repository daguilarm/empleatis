<?php

declare(strict_types=1);

namespace App\Models\Services;

use Illuminate\Contracts\Database\Eloquent\Builder;
use Illuminate\Support\Collection;

trait CategoryService
{
    /**
     * List of categories
     */
    public function scopeSearch(Builder $query, Collection $data): Collection
    {
        return $data->pluck('categories')->unique();
    }
}
