<?php

declare(strict_types=1);

namespace App\Models\Services;

trait HelperService
{
    /**
     * Format and clean value to use for query
     */
    public static function formatValueForQuery(string $value): string
    {
        return str($value)
            ->trim()
            ->upper()
            ->prepend('%')
            ->append('%')
            ->toString();
    }
}
