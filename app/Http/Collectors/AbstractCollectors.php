<?php

declare(strict_types=1);

namespace App\Http\Collectors;

abstract class AbstractCollectors
{
    /**
     * Execute collector
     */
    abstract public function execute(object $categories): void;

    /**
     * Total pages
     */
    abstract public function totalPages(string $value): int;
}
