<?php

declare(strict_types=1);

/**
 * Get data
 */
if (! function_exists('get_data')) {
    function get_data(?string $data, ?string $alternative = null)
    {
        return isset($data) && $data
            ? $data
            : $alternative ?? default_data();
    }
}

/**
 * Default value
 */
if (! function_exists('default_data')) {
    function default_data(): string
    {
        return '&#8208;';
    }
}
