<!DOCTYPE html>
<html class="light scroll-smooth" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <link rel="icon" href="{{ asset('images/logo.png') }}" type="image/png">

    <!-- SEO Meta Tags -->
    <title>@yield('title', 'Cahaya Interior Sejahtera - Jasa Interior Rumah & Kantor Premium')</title>
    <meta name="description" content="@yield('meta_description', 'Cahaya Interior Sejahtera menyediakan jasa desain interior dan pengerjaan interior untuk rumah, kantor, dan ruang komersial. Layanan meliputi Interior Rumah, Interior Kantor, Furniture Custom, Kitchen Set, dan Renovasi Interior.')">
    <meta name="keywords" content="@yield('meta_keywords', 'Cahaya Interior Sejahtera, Jasa Interior, Interior Rumah, Interior Kantor, Desain Interior Mewah, Interior Jakarta, Kontraktor Interior')">
    <link rel="canonical" href="{{ url()->current() }}">
    <meta name="robots" content="index, follow">

    <!-- Hreflang for multilingual SEO -->
    @php
        $currentRoute = Route::currentRouteName();
        $currentParams = Route::current() ? Route::current()->parameters() : [];
        $paramsWithoutLocale = collect($currentParams)->except('locale')->toArray();
    @endphp
    @if($currentRoute)
        <link rel="alternate" hreflang="id" href="{{ route($currentRoute, array_merge(['locale' => 'id'], $paramsWithoutLocale)) }}">
        <link rel="alternate" hreflang="en" href="{{ route($currentRoute, array_merge(['locale' => 'en'], $paramsWithoutLocale)) }}">
        <link rel="alternate" hreflang="x-default" href="{{ route($currentRoute, array_merge(['locale' => 'id'], $paramsWithoutLocale)) }}">
    @endif

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="@yield('og_type', 'website')">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:title" content="@yield('title', 'Cahaya Interior Sejahtera - Jasa Interior Rumah & Kantor Premium')">
    <meta property="og:description" content="@yield('meta_description', 'Cahaya Interior Sejahtera menyediakan jasa desain interior dan pengerjaan interior untuk rumah, kantor, dan ruang komersial. Layanan meliputi Interior Rumah, Interior Kantor, Furniture Custom, Kitchen Set, dan Renovasi Interior.')">
    <meta property="og:image" content="@yield('og_image', 'https://cahayainteriorsejahtera.com/og-image.jpg')">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:site_name" content="Cahaya Interior Sejahtera">
    <meta property="og:locale" content="{{ app()->getLocale() === 'id' ? 'id_ID' : 'en_US' }}">

    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:url" content="{{ url()->current() }}">
    <meta name="twitter:title" content="@yield('title', 'Cahaya Interior Sejahtera - Jasa Desain Interior Rumah & Kantor')">
    <meta name="twitter:description" content="@yield('meta_description', 'Cahaya Interior Sejahtera menyediakan jasa desain interior dan pengerjaan interior untuk rumah, kantor, dan ruang komersial. Layanan meliputi Interior Rumah, Interior Kantor, Furniture Custom, Kitchen Set, dan Renovasi Interior.')">
    <meta name="twitter:image" content="@yield('og_image', 'https://cahayainteriorsejahtera.com/og-image.jpg')">

    <!-- Google Fonts & Icons -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet">

    <!-- Tailwind via Vite build (replaces CDN) -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Alpine.js -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <!-- Google Analytics (GA4) -->
    @if(config('services.google.analytics_id'))
        <script async src="https://www.googletagmanager.com/gtag/js?id={{ config('services.google.analytics_id') }}"></script>
        <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());
          gtag('config', "{{ config('services.google.analytics_id') }}");
        </script>
    @endif

    <!-- Google Search Console -->
    @if(config('services.google.search_console_verification'))
        <meta name="google-site-verification" content="{{ config('services.google.search_console_verification') }}">
    @endif

    {{-- JSON-LD Structured Data (Organization & LocalBusiness Schemas) --}}
    <script type="application/ld+json">
    {
      "@@context": "https://schema.org",
      "@@type": "Organization",
      "@@id": "{{ url('/') }}/#organization",
      "name": "Cahaya Interior Sejahtera",
      "url": "{{ url('/') }}",
      "logo": "{{ asset('images/logo.png') }}",
      "description": "Jasa desain interior dan pengerjaan interior untuk rumah, kantor, dan ruang komersial.",
      "contactPoint": {
        "@@type": "ContactPoint",
        "telephone": "+62-857-7675-5884",
        "contactType": "customer service",
        "email": "cahayainteriorsejahtera@gmail.com"
      },
      "sameAs": [
        "https://www.instagram.com/cahayainteriorsejahtera_",
        "https://www.tiktok.com/@cahayainteriorsejahteraa",
        "https://wa.me/6285776755884"
      ]
    }
    </script>

    <script type="application/ld+json">
    {
      "@@context": "https://schema.org",
      "@@type": "LocalBusiness",
      "@@id": "{{ url('/') }}/#localbusiness",
      "name": "Cahaya Interior Sejahtera",
      "image": "{{ asset('images/logo.png') }}",
      "description": "Jasa desain interior dan pengerjaan interior untuk rumah, kantor, dan ruang komersial. Melayani area Bogor, Jakarta, dan sekitarnya.",
      "telephone": "+62-857-7675-5884",
      "email": "cahayainteriorsejahtera@gmail.com",
      "priceRange": "$$$",
      "address": {
        "@@type": "PostalAddress",
        "streetAddress": "Jl Griya Alam Sentosa No 101 Dusun Pasir Angin Cileungsi Bogor Jawa Barat",
        "addressLocality": "Kabupaten Bogor",
        "addressRegion": "Jawa Barat",
        "postalCode": "16820",
        "addressCountry": "ID"
      },
      "geo": {
        "@@type": "GeoCoordinates",
        "latitude": -6.2241,
        "longitude": 106.8122
      },
      "url": "{{ url('/') }}",
      "openingHoursSpecification": [
        {
          "@@type": "OpeningHoursSpecification",
          "dayOfWeek": [
            "Monday",
            "Tuesday",
            "Wednesday",
            "Thursday",
            "Friday"
          ],
          "opens": "09:00",
          "closes": "18:00"
        },
        {
          "@@type": "OpeningHoursSpecification",
          "dayOfWeek": "Saturday",
          "opens": "09:00",
          "closes": "18:00",
          "description": "By appointment only"
        }
      ],
      "areaServed": [
        {
          "@@type": "City",
          "name": "Bogor"
        },
        {
          "@@type": "City",
          "name": "Jakarta"
        }
      ]
    }
    </script>

    @yield('schema')
</head>
<body class="bg-background text-on-background antialiased selection:bg-tertiary-fixed-dim selection:text-on-tertiary-fixed">

    <!-- Top Navigation -->
    <x-navigation />

    <!-- Main Content Content -->
    @yield('content')

    <!-- Footer -->
    <x-footer />

</body>
</html>