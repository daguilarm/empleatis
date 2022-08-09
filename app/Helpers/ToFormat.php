<?php

declare(strict_types=1);

/**
 * Convert a string to slug
 */
if (! function_exists('to_slug')) {
    function to_slug(?string $value): ?string
    {
        return $value
            ? str($value)->replace('/a', '')->slug('-')->toString()
            : null;
    }
}

/**
 * Convert a string to title
 */
if (! function_exists('to_title')) {
    function to_title(?string $value): ?string
    {
        return $value
            ? str($value)->replace('-', ' ')->title()->toString()
            : null;
    }
}

/**
 * Convert a string to title
 */
if (! function_exists('from_search')) {
    function from_search(): string
    {
        // Get the values
        $request = request();

        // Format values
        $format = function (string $value): string {
            return sprintf('<span class="text-red-800 font-bold">%s</span>', $value);
        };

        // Format the values
        $search = $request->get('search')
            ? $format(ucfirst($request->get('search')))
            : null;

        $searchLocation = $request->get('locations')
            ? $format('en '.ucfirst($request->get('locations')))
            : null;

        // Build the text
        $text = 'Resultados de búsqueda para';

        return sprintf('%s %s %s', $text, $search, $searchLocation);
    }
}

/**
 * Get the workday value
 */
if (! function_exists('to_workday')) {
    function to_workday(string $data, array $result = [])
    {
        $list = config('empleatis.workday_type');
        $data = explode(',', $data);

        foreach ($data as $value) {
            $value = trim($value);

            if (isset($list[$value])) {
                array_push($result, $list[$value]);
            }
        }

        return implode(', ', $result);
    }
}
