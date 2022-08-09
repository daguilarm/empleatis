<?php

declare(strict_types=1);

namespace App\Http\Collectors\Opcionempleo;

use App\Http\Collectors\AbstractCollectors;
use App\Models\Language;

class Collector extends AbstractCollectors
{
    /**
     * Execute collector
     */
    public function execute(object $categories): void
    {
        $total = $totalLanguages = 0;
        $languageCategory = collect([]);

        //List all the categories
        foreach ($categories as $index => $category) {
            // Skip category: programador
            if ($category->id !== 18) {

                // Total items
                if ($index === 0) {
                    $total = $this->totalPages($category->search_name);
                }

                // Proccess all the jobs
                if ($total > 0) {
                    $this->executeJob($category, $total, null);
                }

            // Programming category
            } else {
                $languageCategory = $category;
            }
        }

        // Generate the jobs for programming languages
        foreach (Language::all() as $indexLanguage => $language) {

            // Total items
            if ($indexLanguage === 0) {
                $totalLanguages = $this->totalPages(sprintf('%s', $language->name));
            }

            // Proccess all the jobs
            if ($totalLanguages > 0) {
                $this->executeJob($languageCategory, $totalLanguages, $language, 5);
            }
        }
    }

    /**
     * Calculate the total pages
     */
    public function totalPages(string $search): int
    {
        // Get the total results from the api
        return (new Response([$search], 1))
            ->connection()
            ->asJson()
            ->headers()
            ->get()
            ->pages;
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
