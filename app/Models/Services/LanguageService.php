<?php

declare(strict_types=1);

namespace App\Models\Services;

use Illuminate\Support\Collection;

trait LanguageService
{
    /**
     * List of categories
     */
    public function scopeTopLanguages(): Collection
    {
        return self::query()
            ->select('name', 'id')
            ->where('top', true)
            ->take(15)
            ->get();
    }
}
