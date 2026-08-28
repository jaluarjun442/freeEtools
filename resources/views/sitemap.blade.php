@php
    $tools = config('tools');
@endphp

<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">

    <url>
        <loc>{{ url('/') }}</loc>
        <changefreq>weekly</changefreq>
        <priority>1.0</priority>
    </url>

    @foreach($tools as $tool)
        <url>
            <loc>{{ url('/' . $tool['slug']) }}</loc>
            <changefreq>monthly</changefreq>
            <priority>0.8</priority>
        </url>
    @endforeach

    <url>
        <loc>{{ url('/about-us') }}</loc>
        <changefreq>monthly</changefreq>
        <priority>0.6</priority>
    </url>

    <url>
        <loc>{{ url('/contact-us') }}</loc>
        <changefreq>monthly</changefreq>
        <priority>0.6</priority>
    </url>

    <url>
        <loc>{{ url('/privacy-policy') }}</loc>
        <changefreq>yearly</changefreq>
        <priority>0.5</priority>
    </url>

    <url>
        <loc>{{ url('/terms-and-conditions') }}</loc>
        <changefreq>yearly</changefreq>
        <priority>0.5</priority>
    </url>

    <url>
        <loc>{{ url('/disclaimer') }}</loc>
        <changefreq>yearly</changefreq>
        <priority>0.5</priority>
    </url>

</urlset>