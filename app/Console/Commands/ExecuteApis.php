<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class ExecuteApis extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'api:daily';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Populate database with the APIs.';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $categories = \App\Models\Category::get();

        // Opcionempleo.com
        app(\App\Http\Collectors\Opcionempleo\Collector::class)
            ->execute($categories);

        // Jooble.com
        app(\App\Http\Collectors\Jooble\Collector::class)
            ->execute($categories);

        // Log: success
        $this->info('Successfully updated from the APIs. Database is now populated.');

        return 0;
    }
}
