<?php

declare(strict_types=1);

namespace App\Http\Collectors\_Traits;

trait Filterable
{
    private function filterContains(string $needel, string $haystack): bool
    {
        $needels = str($needel)->lower()->explode(',')->toArray();
        $haystack = str($haystack)->lower()->toString();

        return str($haystack)->containsAll([$needels]);
    }

    private function filterContainsTotal(string $needel, string $haystack, int $total = 0)
    {
        $needels = str($needel)->lower()->explode(',')->toArray();
        $haystack = str($haystack)->lower()->toString();

        foreach ($needels as $needel) {
            if (str($haystack)->contains($needel)) {
                $total += substr_count($haystack, $needel);
            }
        }

        return $total;
    }

    /**
     * Filter locations names
     * By deleting especial chars
     */
    private function filterLocations(string $locations): string
    {
        return str_replace('-', ',', $locations);
    }

    /**
     * Filters offer content
     * Eliminate offers with problems
     */
    private function filterElement(string $category, object $values, ?string $language = null): bool
    {
        $score = 10;
        $needel = $language ? sprintf('%s, %s', $category, $language) : $category;
        $descriptionCount = $this->filterContainsTotal($needel, $values?->description ?? $values?->snippet);

        // Javascript error
        if ($this->filterContains('disabled JavaScript in your web browser', $values?->description ?? $values?->snippet) === true) {
            $score = 0;
        }

        // Title error
        if ($this->filterContains($needel, $values->title) === false) {
            $score -= 5;
        }

        // Description score
        $score = match ($descriptionCount) {
            0 => $score - 7.5,
            1 => $score - 3.5,
            2 => $score - 2,
            default => $score,
        };

        return $score > 0
            ? true
            : false;
    }
}
