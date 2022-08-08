<?xml version="1.0" encoding="UTF-8"?>
<sitemapindex xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
    {{-- home --}}
    <sitemap>
        <loc>{{ route('home') }}</loc>
        <priority>1</priority>
        <changefreq>daily</changefreq>
        <lastmod>{{ date('Y-m-d') }}</lastmod>
    </sitemap>
    {{-- Legal --}}
    <sitemap>
        <loc>{{ route('legal.cookies') }}</loc>
        <priority>0.5</priority>
        <changefreq>monthly</changefreq>
        <lastmod>{{ date('Y-m-d', strtotime("first day of previous month")) }}</lastmod>
    </sitemap>
    <sitemap>
        <loc>{{ route('legal.privacity') }}</loc>
        <priority>0.5</priority>
        <changefreq>monthly</changefreq>
        <lastmod>{{ date('Y-m-d', strtotime("first day of previous month")) }}</lastmod>
    </sitemap>
    <sitemap>
        <loc>{{ route('legal.advice') }}</loc>
        <priority>0.5</priority>
        <changefreq>monthly</changefreq>
        <lastmod>{{ date('Y-m-d', strtotime("first day of previous month")) }}</lastmod>
    </sitemap>
    {{-- Categories --}}
    @foreach(\App\Models\Category::all() as $category)
        <sitemap>
            <loc>{{ rute_to_category($category) }}</loc>
            <priority>0.95</priority>
            <changefreq>daily</changefreq>
            <lastmod>{{ date('Y-m-d') }}</lastmod>
        </sitemap>
    @endforeach
    {{-- Languages --}}
    @foreach(\App\Models\Language::all() as $language)
        <sitemap>
            <loc>{{ rute_to_language($language) }}</loc>
            <priority>0.95</priority>
            <changefreq>daily</changefreq>
            <lastmod>{{ date('Y-m-d') }}</lastmod>
        </sitemap>
    @endforeach
</sitemapindex>
