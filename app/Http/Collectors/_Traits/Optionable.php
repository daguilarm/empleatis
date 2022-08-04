<?php

namespace App\Http\Collectors\_Traits;

trait Optionable
{
    /**
     * Get the working day type
     */
    private function calculateWorkingDay(string $value): string
    {
        // Values from config file
        $config = config('empleatis.working_day');

        // Get and format all values from config file
        $values = str($value)
            ->explode(',')
            ->map(function ($value) {
                return trim($value);
            })
            ->toArray();

        // Generate an array with all the values.
        // An offert can has multiples values.
        return collect($config)
            ->map(function ($name, $key) use ($values) {
                foreach ($values as $value) {
                    if (in_array($value, $name)) {
                        return $key;
                    }
                }
            })
            ->filter()
            ->values()
            ->implode(',');
    }
}
