<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
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

// Home Controller
Route::get('/', HomeController::class)
    ->middleware(['guest'])
    ->name('home');

// Language Controller
Route::get('/{section}/{categoryNameSlug}/{category}/lenguaje/{languageNameSlug}/{language}/{provinceNameSlug}/{province}', LanguageController::class)
->middleware(['guest'])
->name('languages.province');

// Language Controller
Route::get('/{section}/{categoryNameSlug}/{category}/lenguaje/{languageNameSlug}/{language}', LanguageController::class)
->middleware(['guest'])
->name('languages');

// Categories, Provinces Controller
Route::get('/{section}/{categoryNameSlug}/{category}/{provinceNameSlug}/{province}', CategoryController::class)
    ->middleware(['guest'])
    ->name('provinces');

// Categories Controller
Route::get('/{section}/{categoryNameSlug}/{category}', CategoryController::class)
    ->middleware(['guest'])
    ->name('categories');

// Search Controller
Route::get('/search', SearchController::class)
    ->middleware(['guest'])
    ->name('search');

// Dashboard Controller
Route::get('/dashboard', DashboardController::class)
    ->middleware(['auth'])
    ->name('dashboard');

Route::get('/update', function () {
    $categories = \App\Models\Category::get();

    app(\App\Http\Collectors\Opcionempleo\Collector::class)
        ->execute($categories);

    app(\App\Http\Collectors\Jooble\Collector::class)
        ->execute($categories);
});


require __DIR__.'/auth.php';
