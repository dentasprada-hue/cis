<?xml version="1.0" encoding="UTF-8"?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9"
        xmlns:xhtml="http://www.w3.org/1999/xhtml">

    {{-- Home --}}
    @foreach(['id', 'en'] as $locale)
    <url>
        <loc>{{ route('home', ['locale' => $locale]) }}</loc>
        <xhtml:link rel="alternate" hreflang="id" href="{{ route('home', ['locale' => 'id']) }}"/>
        <xhtml:link rel="alternate" hreflang="en" href="{{ route('home', ['locale' => 'en']) }}"/>
        <lastmod>{{ now()->startOfDay()->toAtomString() }}</lastmod>
        <changefreq>daily</changefreq>
        <priority>1.0</priority>
    </url>
    @endforeach

    {{-- About --}}
    @foreach(['id', 'en'] as $locale)
    <url>
        <loc>{{ route('about', ['locale' => $locale]) }}</loc>
        <xhtml:link rel="alternate" hreflang="id" href="{{ route('about', ['locale' => 'id']) }}"/>
        <xhtml:link rel="alternate" hreflang="en" href="{{ route('about', ['locale' => 'en']) }}"/>
        <lastmod>{{ now()->startOfDay()->toAtomString() }}</lastmod>
        <changefreq>monthly</changefreq>
        <priority>0.8</priority>
    </url>
    @endforeach

    {{-- Projects index --}}
    @foreach(['id', 'en'] as $locale)
    <url>
        <loc>{{ route('projects', ['locale' => $locale]) }}</loc>
        <xhtml:link rel="alternate" hreflang="id" href="{{ route('projects', ['locale' => 'id']) }}"/>
        <xhtml:link rel="alternate" hreflang="en" href="{{ route('projects', ['locale' => 'en']) }}"/>
        <lastmod>{{ $projects->first()?->updated_at?->toAtomString() ?? now()->startOfDay()->toAtomString() }}</lastmod>
        <changefreq>weekly</changefreq>
        <priority>0.9</priority>
    </url>
    @endforeach

    {{-- Contact --}}
    @foreach(['id', 'en'] as $locale)
    <url>
        <loc>{{ route('contact', ['locale' => $locale]) }}</loc>
        <xhtml:link rel="alternate" hreflang="id" href="{{ route('contact', ['locale' => 'id']) }}"/>
        <xhtml:link rel="alternate" hreflang="en" href="{{ route('contact', ['locale' => 'en']) }}"/>
        <lastmod>{{ now()->startOfDay()->toAtomString() }}</lastmod>
        <changefreq>monthly</changefreq>
        <priority>0.7</priority>
    </url>
    @endforeach

    {{-- Project detail pages --}}
    @foreach ($projects as $project)
    @foreach(['id', 'en'] as $locale)
    <url>
        <loc>{{ route('projects.detail', ['locale' => $locale, 'slug' => $project->slug]) }}</loc>
        <xhtml:link rel="alternate" hreflang="id" href="{{ route('projects.detail', ['locale' => 'id', 'slug' => $project->slug]) }}"/>
        <xhtml:link rel="alternate" hreflang="en" href="{{ route('projects.detail', ['locale' => 'en', 'slug' => $project->slug]) }}"/>
        <lastmod>{{ $project->updated_at->toAtomString() }}</lastmod>
        <changefreq>weekly</changefreq>
        <priority>0.8</priority>
    </url>
    @endforeach
    @endforeach

</urlset>
