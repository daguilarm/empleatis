<?php

declare(strict_types=1);

namespace App\Http\Collectors\_Traits;

use InvalidArgumentException;

trait Salaryable
{
    private array $salary_char_filter = [
        ',',
        ';',
        '-',
        '_',
        ':',
        '/',
        '#',
        '€',
        '$',
        '(',
        ')',
        '?',
        '¿',
        '¡',
        '!',
        '&euro;',
        '&#8364;',
        '&#x20AC;',
        '&#36;',
        '&#x24;',
        '&dollar;',
    ];

    /**
     * Format salary and translate
     */
    private function formatSalary(string $salary): string
    {
        return str_replace(
            ['per year', 'per month'],
            ['al año', 'al mes'],
            $salary
        );
    }

    /**
     * Custom way to calculate salary by year
     *
     * @param  string|object  $salary
     */
    private function calculateSalary($salary): array
    {
        if ($salary) {
            // Filter
            $salary = str($salary)
                ->replace($this->salary_char_filter, ' ')
                ->toString();

            // By month
            if (str($salary)->contains(['mes', 'mensuales', 'mensualidad', 'month'])) {
                return $this->scoreSalary($salary, 'month');
            }

            // By year
            if (str($salary)->contains(['año', 'anual', 'anuales', 'year'])) {
                return $this->scoreSalary($salary, 'year');
            }

            // By week
            if (str($salary)->contains(['semana', 'semanal', 'semanales', 'week'])) {
                return $this->scoreSalary($salary, 'week');
            }

            // By day
            if (str($salary)->contains(['día', 'dia', 'diario', 'day'])) {
                return $this->scoreSalary($salary, 'day');
            }
        }

        return [0.00, 0.000, 0.00];
    }

    /**
     * Get values for salary
     */
    private function scoreSalary(?string $salary, string $convertion): array
    {
        // Convert string into a list of arrays
        $values = str($salary)
            ->explode(' ')
            ->toArray();

        // Get the numeric part of the string
        $numeric = array_filter($values, 'is_numeric');

        // Get the convertion value
        $convertion = match ($convertion) {
            'year' => 1,
            'month' => 12,
            'week' => 52,
            'day' => 365,
            default => throw new InvalidArgumentException('Not allowed value.'),
        };

        // Calculate the values
        if (count($numeric) > 0) {
            $salary_max = max($numeric) * $convertion;
            $salary_min = min($numeric) * $convertion;
            $salary_year = ($salary_max + $salary_min) / 2;

            return [
                (float) $salary_max,
                (float) $salary_min,
                (float) $salary_year,
            ];
        }

        return [0.00, 0.000, 0.00];
    }
}
