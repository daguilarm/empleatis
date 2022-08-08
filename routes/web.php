<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\LegalController;
use App\Http\Controllers\LinkController;
use App\Http\Controllers\SearchController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*
|--------------------------------------------------------------------------
| Base routes
|--------------------------------------------------------------------------
*/
Route::middleware(['guest'])
    ->group(function () {
        // Home Controller
        Route::get('/', HomeController::class)
            ->name('home');

        // Link Controller
        Route::get('/links/reference/{offer}', LinkController::class)
        ->name('link');

        // Language Controller
        Route::get('/{section}/{categoryNameSlug}/{category}/lenguaje/{languageNameSlug}/{language}/{provinceNameSlug}/{province}', LanguageController::class)
            ->name('languages.province');

        // Language Controller
        Route::get('/{section}/{categoryNameSlug}/{category}/lenguaje/{languageNameSlug}/{language}', LanguageController::class)
            ->name('languages');

        // Categories, Provinces Controller
        Route::get('/{section}/{categoryNameSlug}/{category}/{provinceNameSlug}/{province}', CategoryController::class)
            ->name('provinces');

        // Categories Controller
        Route::get('/{section}/{categoryNameSlug}/{category}', CategoryController::class)
            ->name('categories');

        // Search Controller
        Route::get('/search', SearchController::class)
            ->name('search');

        // Search Controller
        Route::get('/sitemap/rss.xml', function () {
            return response()
                ->view('sitemap')
                ->header('Content-Type', 'text/xml');
        })
            ->name('sitemap');
    });

/*
|--------------------------------------------------------------------------
| Legal routes
|--------------------------------------------------------------------------
*/
Route::middleware(['guest'])
    ->prefix('legal')
    ->name('legal.')
    ->group(function () {
        // Cookies
        Route::get('/politica-cookies', [LegalController::class, 'cookies'])
            ->name('cookies');

        // Privacy conditions
        Route::get('/politica-privacidad', [LegalController::class, 'privacity'])
            ->name('privacity');

        // Legal advice
        Route::get('/aviso-legal', [LegalController::class, 'advice'])
            ->name('advice');
    });

/*
|--------------------------------------------------------------------------
| Admin routes
|--------------------------------------------------------------------------
*/
Route::middleware(['auth'])->group(function () {
    // Dashboard Controller
    Route::get('/dashboard', DashboardController::class)
        ->name('dashboard');
});

Route::get('/test', function () {
    return view('test');
});

require __DIR__.'/auth.php';
