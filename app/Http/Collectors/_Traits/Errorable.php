<?php

declare(strict_types=1);

namespace App\Http\Collectors\_Traits;

trait Errorable
{
    /**
     * Declare an error with the salary
     */
    private function errorSalary(float $maxSalary): int
    {
        return $maxSalary > 60000
            ? 1
            : 0;
    }

    /**
     * Declare an error with the url
     */
    private function errorUrl(?string $url): int
    {
        if (! $url) {
            return 0;
        }

        return curl_init($url) !== false
            ? 1
            : 0;
    }
}
