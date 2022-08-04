<?php

declare(strict_types=1);

namespace App\Http\Collectors;

abstract class AbstractResponse
{
    /**
     * Set the locale variable
     */
    protected string $locale = 'es_ES';

    /**
     * Generate the url for the API
     */
    abstract protected function apiURL(): string;

    /**
     * Generate the headers for the API
     *
     * @return resource
     */
    abstract protected function apiHeaders();
}
