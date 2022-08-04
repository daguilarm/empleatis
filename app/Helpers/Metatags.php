<?php

declare(strict_types=1);

use Illuminate\Support\Collection;

/**
 * Get data
 */
if (! function_exists('metatag_title')) {
    function metatag_title(Collection $data)
    {
        return sprintf('<title>Mi titulo....</title>');
    }
}
