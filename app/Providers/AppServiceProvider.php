<?php

namespace App\Providers;

use App\Facades\Metatag\Metatag;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        // Metatag facade
        $this->app->bind('metatag', function () {
            return new Metatag();
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
