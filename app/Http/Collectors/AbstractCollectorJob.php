<?php

declare(strict_types=1);

namespace App\Http\Collectors;

abstract class AbstractCollectorJob
{
    /**
     * Execute the job.
     *
     * @return void|null
     */
    abstract public function handle();

    /**
     * Set all the values
     *
     * @return array|null
     */
    abstract protected function map(object $values, string $category_name, int $category_id, float $ranking = 0.00);
}
