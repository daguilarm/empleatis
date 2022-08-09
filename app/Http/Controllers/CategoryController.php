<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Http\Controllers\Traits\Configurable;
use Illuminate\View\View;

class CategoryController
{
    use Configurable;

    /**
     * Show the categories.
     */
    public function __invoke(string $section, string $categoryNameSlug, int $category, ?string $provinceNameSlug = null, ?int $province = null): View
    {
        $config = $this->configuration($section, $categoryNameSlug, $category, $provinceNameSlug, $province);

        return view('master')
            ->with('config', $config);
    }
}
