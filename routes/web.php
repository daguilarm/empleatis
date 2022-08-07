<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LegalController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\DashboardController;

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

Route::get('/test', function() {
    return view('test');
});

require __DIR__.'/auth.php';
