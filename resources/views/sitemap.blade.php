<?xml version="1.0" encoding="UTF-8"?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
    {{-- home --}}
    <url>
        <loc>{{ route('home') }}</loc>
        <changefreq>daily</changefreq>
        <lastmod>{{ date(DATE_ATOM) }}</lastmod>
        <priority>1</priority>
    </url>
    {{-- Legal --}}
    <url>
        <loc>{{ route('legal.cookies') }}</loc>
        <changefreq>monthly</changefreq>
        <lastmod>{{ date(DATE_ATOM, strtotime("first day of previous month")) }}</lastmod>
    </url>
    <url>
        <loc>{{ route('legal.privacity') }}</loc>
        <changefreq>monthly</changefreq>
        <lastmod>{{ date(DATE_ATOM, strtotime("first day of previous month")) }}</lastmod>
    </url>
    <url>
        <loc>{{ route('legal.advice') }}</loc>
        <changefreq>monthly</changefreq>
        <lastmod>{{ date(DATE_ATOM, strtotime("first day of previous month")) }}</lastmod>
    </url>
    {{-- Categories --}}
    @foreach(\App\Models\Category::all() as $category)
        <url>
            <loc>{{ rute_to_category($category) }}</loc>
            <changefreq>daily</changefreq>
            <lastmod>{{ date(DATE_ATOM) }}</lastmod>
            <priority>0.75</priority>
        </url>
    @endforeach
    {{-- Languages --}}
    @foreach(\App\Models\Language::all() as $language)
        <url>
            <loc>{{ rute_to_language($language) }}</loc>
            <changefreq>daily</changefreq>
            <lastmod>{{ date(DATE_ATOM) }}</lastmod>
            <priority>0.75</priority>
        </url>
    @endforeach
</urlset>
