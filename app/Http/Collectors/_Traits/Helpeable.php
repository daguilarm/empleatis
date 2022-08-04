<?php

declare(strict_types=1);

namespace App\Http\Collectors\_Traits;

use Carbon\Carbon;

trait Helpeable
{
    /**
     * Format date using Carbon
     */
    private function formatDate(string $date): Carbon
    {
        return Carbon::parse($date);
    }

    /**
     * Check for numeric and format
     */
    private function isNumeric(object|null $object, string $value): float
    {
        // Exists value
        $numeric = isset($object->$value)
            ? (float) $object->$value
            : 0.00;

        return is_numeric($numeric)
            ? (float) $numeric
            : 0.00;
    }
}
