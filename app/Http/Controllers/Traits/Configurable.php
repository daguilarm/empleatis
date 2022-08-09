<?php

declare(strict_types=1);

namespace App\Http\Controllers\Traits;

use Illuminate\Http\Request;
use Illuminate\Support\Collection;

trait Configurable
{
    private ?string $section;

    private ?int $province;

    private ?string $provinceName;

    private ?string $provinceNameSlug;

    private ?int $category;

    private ?string $categoryName;

    private ?string $categoryNameSlug;

    private ?int $language;

    private ?string $languageName;

    private ?string $languageNameSlug;

    private ?string $search;

    private ?string $location;

    private int $perPage;

    private Request $request;

    private string $locale;

    private string $url;

    private int $totalResults;

    /**
     * Set the default values.
     */
    public function __construct()
    {
        // Only one call
        $this->request = request();

        $this->section = $this->request->get('section', null);
        $this->province = (int) $this->request->get('province', null);
        $this->provinceNameSlug = $this->request->get('provinceNameSlug', null);
        $this->provinceName = to_title($this->provinceNameSlug);
        $this->category = (int) $this->request->get('category', null);
        $this->categoryNameSlug = $this->request->get('categoryNameSlug', null);
        $this->categoryName = to_title($this->categoryNameSlug);
        $this->language = (int) $this->request->get('language', null);
        $this->languageNameSlug = $this->request->get('languageNameSlug', null);
        $this->languageName = to_title($this->languageNameSlug);
        $this->search = $this->request->get('search', null);
        $this->location = $this->request->get('location', null);
        $this->perPage = 15;
        $this->locale = $this->captureLocale();
        $this->url = url()->current();
    }

    /**
     * Populate the values base on the section.
     */
    public function configuration(string $section, ?string $categoryNameSlug = null, ?int $category = null, ?string $provinceNameSlug = null, ?int $province = null, ?string $languageNameSlug = null, ?int $language = null): Collection
    {
        return collect([
            'section' => $section,
            'province' => $this->capture($province),
            'provinceName' => $this->captureName($this->provinceName, $this->provinceNameSlug, $provinceNameSlug),
            'provinceNameSlug' => $this->captureNameSlug($provinceNameSlug, $this->provinceNameSlug),
            'category' => $this->capture($category),
            'categoryName' => $this->captureName($this->categoryName, $this->categoryNameSlug, $categoryNameSlug),
            'categoryNameSlug' => $this->captureNameSlug($categoryNameSlug, $this->categoryNameSlug),
            'language' => $this->capture($language),
            'languageName' => $this->captureName($this->languageName, $this->languageNameSlug, $languageNameSlug),
            'languageNameSlug' => $this->captureNameSlug($languageNameSlug, $this->languageNameSlug),
            'search' => $this->search,
            'location' => $this->location,
            'perPage' => $this->perPage,
            'locale' => $this->locale,
            'url' => $this->url,
        ]);
    }

    /**
     * Capture element by ID
     */
    private function capture(?int $name): int|null
    {
        return $name ?? $this->{$name} ?? null;
    }

    /**
     * Capture element by NAME
     */
    private function captureName(?string $name, ?string $nameSlug, ?string $nameSlugValue): string|null
    {
        return $name ?? to_title($nameSlug ?? null) ?? to_title($nameSlugValue ?? null) ?? null;
    }

    /**
     * Capture element by SLUG
     */
    private function captureNameSlug(?string $name, ?string $nameSlug): string|null
    {
        return $name ?? to_title($nameSlug ?? null) ?? null;
    }

    /**
     * Capture locale configuration
     */
    private function captureLocale(): string
    {
        return str_replace('_', '-', app()->getLocale());
    }
}
