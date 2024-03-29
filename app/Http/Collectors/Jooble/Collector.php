<?php

declare(strict_types=1);

namespace App\Http\Collectors\Jooble;

use App\Http\Collectors\AbstractCollectors;
use App\Models\Language;

class Collector extends AbstractCollectors
{
    private int $totalPages = 2;

    /**
     * Execute collector
     */
    public function execute(object $categories): void
    {
        $languageCategory = collect([]);

        //List all the categories
        foreach ($categories as $category) {
            // Skip category: programador
            if ($category->id === 18) {
                // Programming category
                $languageCategory = $category;
            } else {
                // Proccess all the jobs
                $this->executeJob($category, $this->totalPages, null);
            }
        }

        // Generate the jobs for programming languages
        foreach (Language::all() as $language) {
            // Proccess all the jobs
            $this->executeJob($languageCategory, $this->totalPages, $language);
        }
    }

    /**
     * Calculate the total pages
     */
    public function totalPages(string $search): int
    {
        // Get the total results from the api
        return 5;
    }

    /**
     * Generate the queue job
     */
    public function executeJob(object $category, int $total, ?object $language, int $limit = 10): void
    {
        $total = $total >= $limit ? 10 : $total;

        // Proccess all the jobs with the pagination
        for ($x = 1; $x <= $total; $x++) {

            // Add the current job
            CollectorJob::dispatch($category, $x, $language)
                ->delay(now()->addSeconds(5));
        }
    }
}
