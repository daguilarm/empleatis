<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Http\Configurable;
use Illuminate\View\View;

class LanguageController
{
    use Configurable;

    /**
     * Show the languages.
     */
    public function __invoke(?string $section, ?string $categoryNameSlug, ?int $category, ?string $languageNameSlug, ?int $language, ?string $provinceNameSlug = null, ?int $province = null): View
    {
        $config = $this->configuration('lenguajes', $categoryNameSlug, $category, $provinceNameSlug, $province, $languageNameSlug, $language);

        return view('master')->withConfig($config);
    }
}
