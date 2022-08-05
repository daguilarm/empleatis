<?php

namespace App\Http\Collectors\_Traits;

trait Optionable
{
    private string $workingDayDefault = '3';

    /**
     * Get the working day type
     */
    private function calculateWorkingDay(?string $value = null): string
    {
        // No results
        if (! $value) {
            return $this->workingDayDefault;
        }

        // Values from config file
        $config = config('empleatis.workday_type');

        // Get and format all values from config file
        $values = str($value)
            ->explode(',')
            ->map(function ($value) {
                return ucfirst(trim($value));
            })
            ->toArray();

        // Generate an array with all the values.
        // An offert can has multiples values.
        $results = collect($config)
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

        return $results ?? $this->workingDayDefault;
    }
}
