<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;

class ExecuteApis extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'api:update';

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

        // Reset cache
        Artisan::call('modelCache:clear', ['--model' => 'App\Models\Offer']);

        // Log: success
        $this->info('Successfully updated from the APIs. Database is now populated.');

        return 0;
    }
}
