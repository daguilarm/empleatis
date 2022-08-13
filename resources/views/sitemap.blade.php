<?xml version="1.0" encoding="UTF-8"?>
<sitemapindex xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
    {{-- home --}}
    <sitemap>
        <loc>{{ route('home') }}</loc>
        <changefreq>daily</changefreq>
        <lastmod>{{ date('YYYY-MM-DDThh:mmTZD') }}</lastmod>
    </sitemap>
    {{-- Legal --}}
    <sitemap>
        <loc>{{ route('legal.cookies') }}</loc>
        <changefreq>monthly</changefreq>
        <lastmod>{{ date('YYYY-MM-DDThh:mmTZD', strtotime("first day of previous month")) }}</lastmod>
    </sitemap>
    <sitemap>
        <loc>{{ route('legal.privacity') }}</loc>
        <changefreq>monthly</changefreq>
        <lastmod>{{ date('YYYY-MM-DDThh:mmTZD', strtotime("first day of previous month")) }}</lastmod>
    </sitemap>
    <sitemap>
        <loc>{{ route('legal.advice') }}</loc>
        <changefreq>monthly</changefreq>
        <lastmod>{{ date('YYYY-MM-DDThh:mmTZD', strtotime("first day of previous month")) }}</lastmod>
    </sitemap>
    {{-- Categories --}}
    @foreach(\App\Models\Category::all() as $category)
        <sitemap>
            <loc>{{ rute_to_category($category) }}</loc>
            <changefreq>daily</changefreq>
            <lastmod>{{ date('YYYY-MM-DDThh:mmTZD') }}</lastmod>
        </sitemap>
    @endforeach
    {{-- Languages --}}
    @foreach(\App\Models\Language::all() as $language)
        <sitemap>
            <loc>{{ rute_to_language($language) }}</loc>
            <changefreq>daily</changefreq>
            <lastmod>{{ date('YYYY-MM-DDThh:mmTZD') }}</lastmod>
        </sitemap>
    @endforeach
</sitemapindex>
