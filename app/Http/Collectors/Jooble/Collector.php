<?php

declare(strict_types=1);

namespace App\Http\Collectors\Jooble;

use App\Http\Collectors\AbstractCollectors;
use App\Models\Language;

class Collector extends AbstractCollectors
{
    /**
     * Execute collector
     */
    public function execute(object $categories): void
    {
        //List all the categories
        foreach ($categories as $index => $category) {
            // Skip category: programador
            if ($category->id === 18) {
                // Programming category
                $languageCategory = $category;
            } else {
                // Proccess all the jobs
                $this->executeJob($category, 3, null);
            }
        }

        // Generate the jobs for programming languages
        foreach (Language::all() as $indexLanguage => $language) {
            // Proccess all the jobs
            $this->executeJob($languageCategory, 2, $language);
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
