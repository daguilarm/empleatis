<?php

declare(strict_types=1);

/**
 * Generate category url
 */
if (! function_exists('rute_to_category')) {
    function rute_to_category(?object $category): string
    {
        return route('categories', ['categorias', to_slug($category->name), $category->id]);
    }
}

/**
 * Generate language url
 */
if (! function_exists('rute_to_language')) {
    function rute_to_language(?object $language): string
    {
        return route('languages', [
            'categorias',
            'programador',
            18,
            to_slug(optional($language)->name ?? $language->get('name')),
            optional($language)->id ?? $language->get('id'),
        ]);
    }
}

/**
 * Generate a link out
 */
if (! function_exists('link_out')) {
    function link_out(string $uuid): string
    {
        return url('/links/reference/'.$uuid);
    }
}

if (! function_exists('active_url')) {
    function active_url(?object $config, string $remove = 'none'): string
    {
        // Remove the selected element
        $config = $config->map(function ($value, $key) use ($remove) {
            if ($key === $remove) {
                return null;
            }

            return $value;
        });

        // Generate the path
        $url = match (true) {
            $config->get('category') > 0 => sprintf('%s/%s', $config->get('categoryNameSlug'), $config->get('category')),
            $config->get('province') > 0 => sprintf('%s/%s', $config->get('provinceNameSlug'), $config->get('province')),
            $config->get('language') > 0 => sprintf('lenguaje/%s/%s', $config->get('languageNameSlug'), $config->get('language')),
            default => null,
        };

        return sprintf('%s/%s', url('/categorias'), $url);
    }
}
