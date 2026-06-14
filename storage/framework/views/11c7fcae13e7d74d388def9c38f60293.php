<!DOCTYPE html>
<html class="light scroll-smooth" lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <link rel="icon" href="<?php echo e(asset('images/logo.png')); ?>" type="image/png">

    <!-- SEO Meta Tags -->
    <title><?php echo $__env->yieldContent('title', 'Cahaya Interior Sejahtera - Jasa Interior Rumah & Kantor Premium'); ?></title>
    <meta name="description" content="<?php echo $__env->yieldContent('meta_description', 'Cahaya Interior Sejahtera menyediakan jasa desain interior dan pengerjaan interior untuk rumah, kantor, dan ruang komersial. Layanan meliputi Interior Rumah, Interior Kantor, Furniture Custom, Kitchen Set, dan Renovasi Interior.'); ?>">
    <meta name="keywords" content="<?php echo $__env->yieldContent('meta_keywords', 'Cahaya Interior Sejahtera, Jasa Interior, Interior Rumah, Interior Kantor, Desain Interior Mewah, Interior Jakarta, Kontraktor Interior'); ?>">
    <link rel="canonical" href="<?php echo e(url()->current()); ?>">
    <meta name="robots" content="index, follow">

    <!-- Hreflang for multilingual SEO -->
    <?php
        $currentRoute = Route::currentRouteName();
        $currentParams = Route::current() ? Route::current()->parameters() : [];
        $paramsWithoutLocale = collect($currentParams)->except('locale')->toArray();
    ?>
    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($currentRoute): ?>
        <link rel="alternate" hreflang="id" href="<?php echo e(route($currentRoute, array_merge(['locale' => 'id'], $paramsWithoutLocale))); ?>">
        <link rel="alternate" hreflang="en" href="<?php echo e(route($currentRoute, array_merge(['locale' => 'en'], $paramsWithoutLocale))); ?>">
        <link rel="alternate" hreflang="x-default" href="<?php echo e(route($currentRoute, array_merge(['locale' => 'id'], $paramsWithoutLocale))); ?>">
    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="<?php echo $__env->yieldContent('og_type', 'website'); ?>">
    <meta property="og:url" content="<?php echo e(url()->current()); ?>">
    <meta property="og:title" content="<?php echo $__env->yieldContent('title', 'Cahaya Interior Sejahtera - Jasa Interior Rumah & Kantor Premium'); ?>">
    <meta property="og:description" content="<?php echo $__env->yieldContent('meta_description', 'Cahaya Interior Sejahtera menyediakan jasa desain interior dan pengerjaan interior untuk rumah, kantor, dan ruang komersial. Layanan meliputi Interior Rumah, Interior Kantor, Furniture Custom, Kitchen Set, dan Renovasi Interior.'); ?>">
    <meta property="og:image" content="<?php echo $__env->yieldContent('og_image', 'https://cahayainteriorsejahtera.com/og-image.jpg'); ?>">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:site_name" content="Cahaya Interior Sejahtera">
    <meta property="og:locale" content="<?php echo e(app()->getLocale() === 'id' ? 'id_ID' : 'en_US'); ?>">

    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:url" content="<?php echo e(url()->current()); ?>">
    <meta name="twitter:title" content="<?php echo $__env->yieldContent('title', 'Cahaya Interior Sejahtera - Jasa Desain Interior Rumah & Kantor'); ?>">
    <meta name="twitter:description" content="<?php echo $__env->yieldContent('meta_description', 'Cahaya Interior Sejahtera menyediakan jasa desain interior dan pengerjaan interior untuk rumah, kantor, dan ruang komersial. Layanan meliputi Interior Rumah, Interior Kantor, Furniture Custom, Kitchen Set, dan Renovasi Interior.'); ?>">
    <meta name="twitter:image" content="<?php echo $__env->yieldContent('og_image', 'https://cahayainteriorsejahtera.com/og-image.jpg'); ?>">

    <!-- Google Fonts & Icons -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet">

    <!-- Semua elemen pakai Poppins -->
    <style>
        *, *::before, *::after {
            font-family: 'Poppins', system-ui, sans-serif !important;
        }
        .material-symbols-outlined {
            font-family: 'Material Symbols Outlined' !important;
        }
    </style>

    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>

    <!-- Tailwind Config from Design -->
    <script>
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "on-primary-container": "#848484",
                        "on-tertiary-fixed-variant": "#5d4201",
                        "error": "#ba1a1a",
                        "surface-container-lowest": "#ffffff",
                        "secondary-fixed-dim": "#c8c6c6",
                        "background": "#f9f9f9",
                        "secondary": "#5f5e5e",
                        "tertiary": "#000000",
                        "on-error-container": "#93000a",
                        "on-primary-fixed-variant": "#474747",
                        "on-background": "#1a1c1c",
                        "on-secondary-fixed-variant": "#474747",
                        "inverse-on-surface": "#f1f1f1",
                        "surface-variant": "#e2e2e2",
                        "surface-tint": "#5e5e5e",
                        "inverse-primary": "#c6c6c6",
                        "secondary-fixed": "#e4e2e1",
                        "inverse-surface": "#2f3131",
                        "surface-bright": "#f9f9f9",
                        "primary": "#000000",
                        "on-secondary-fixed": "#1b1c1c",
                        "surface-container": "#eeeeee",
                        "primary-container": "#1b1b1b",
                        "on-surface": "#1a1c1c",
                        "primary-fixed-dim": "#c6c6c6",
                        "surface-dim": "#dadada",
                        "tertiary-fixed-dim": "#e9c176",
                        "surface-container-high": "#e8e8e8",
                        "outline-variant": "#cfc4c5",
                        "secondary-container": "#e4e2e1",
                        "surface-container-highest": "#e2e2e2",
                        "error-container": "#ffdad6",
                        "surface-container-low": "#f3f3f3",
                        "primary-fixed": "#e2e2e2",
                        "on-primary": "#ffffff",
                        "on-primary-fixed": "#1b1b1b",
                        "on-tertiary-fixed": "#261900",
                        "on-secondary": "#ffffff",
                        "tertiary-container": "#261900",
                        "on-tertiary": "#ffffff",
                        "on-secondary-container": "#656464",
                        "outline": "#7e7576",
                        "surface": "#f9f9f9",
                        "on-surface-variant": "#4c4546",
                        "on-error": "#ffffff",
                        "tertiary-fixed": "#ffdea5",
                        "on-tertiary-container": "#a17f3b",
                        "premium-brass": "#C5A059"
                    },
                    borderRadius: {
                        "DEFAULT": "0.25rem",
                        "lg": "0.5rem",
                        "xl": "0.75rem",
                        "full": "9999px",
                        "card": "16px",
                        "button": "8px"
                    },
                    spacing: {
                        "gutter": "32px",
                        "section-gap": "120px",
                        "container-max": "1280px",
                        "margin-desktop": "64px",
                        "margin-mobile": "24px",
                        "unit": "8px"
                    },
                    fontFamily: {
                        "headline-sm": ["Playfair Display"],
                        "headline-md": ["Playfair Display"],
                        "label-md": ["Inter"],
                        "headline-lg": ["Playfair Display"],
                        "headline-lg-mobile": ["Playfair Display"],
                        "body-md": ["Inter"],
                        "body-sm": ["Inter"],
                        "headline-xl": ["Playfair Display"],
                        "body-lg": ["Inter"],
                        "label-lg": ["Inter"]
                    },
                    fontSize: {
                        "headline-sm": ["24px", { lineHeight: "32px", fontWeight: "600" }],
                        "headline-md": ["32px", { lineHeight: "40px", fontWeight: "600" }],
                        "label-md": ["12px", { lineHeight: "16px", letterSpacing: "0.03em", fontWeight: "500" }],
                        "headline-lg": ["48px", { lineHeight: "56px", letterSpacing: "-0.01em", fontWeight: "600" }],
                        "headline-lg-mobile": ["36px", { lineHeight: "44px", fontWeight: "600" }],
                        "body-md": ["16px", { lineHeight: "24px", fontWeight: "400" }],
                        "body-sm": ["14px", { lineHeight: "20px", fontWeight: "400" }],
                        "headline-xl": ["64px", { lineHeight: "72px", letterSpacing: "-0.02em", fontWeight: "700" }],
                        "body-lg": ["18px", { lineHeight: "28px", fontWeight: "400" }],
                        "label-lg": ["14px", { lineHeight: "20px", letterSpacing: "0.05em", fontWeight: "600" }]
                    },
                    fontSize: {
                        "headline-sm": ["24px", { lineHeight: "32px", fontWeight: "600" }],
                        "headline-md": ["32px", { lineHeight: "40px", fontWeight: "600" }],
                        "label-md": ["12px", { lineHeight: "16px", letterSpacing: "0.03em", fontWeight: "500" }],
                        "headline-lg": ["48px", { lineHeight: "56px", letterSpacing: "-0.01em", fontWeight: "600" }],
                        "headline-lg-mobile": ["36px", { lineHeight: "44px", fontWeight: "600" }],
                        "body-md": ["16px", { lineHeight: "24px", fontWeight: "400" }],
                        "body-sm": ["14px", { lineHeight: "20px", fontWeight: "400" }],
                        "headline-xl": ["64px", { lineHeight: "72px", letterSpacing: "-0.02em", fontWeight: "700" }],
                        "body-lg": ["18px", { lineHeight: "28px", fontWeight: "400" }],
                        "label-lg": ["14px", { lineHeight: "20px", letterSpacing: "0.05em", fontWeight: "600" }]
                    },
                    boxShadow: {
                        "level-1": "0px 4px 20px rgba(0, 0, 0, 0.04)",
                        "level-2": "0px 12px 40px rgba(0, 0, 0, 0.08)"
                    }
                }
            }
        }
    </script>

    <!-- Alpine.js (Public use) -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <!-- Google Analytics (GA4) -->
    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(config('services.google.analytics_id')): ?>
        <script async src="https://www.googletagmanager.com/gtag/js?id=<?php echo e(config('services.google.analytics_id')); ?>"></script>
        <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());
          gtag('config', "<?php echo e(config('services.google.analytics_id')); ?>");
        </script>
    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

    <!-- Google Search Console -->
    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(config('services.google.search_console_verification')): ?>
        <meta name="google-site-verification" content="<?php echo e(config('services.google.search_console_verification')); ?>">
    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

    
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "Organization",
      "@id": "<?php echo e(url('/')); ?>/#organization",
      "name": "Cahaya Interior Sejahtera",
      "url": "<?php echo e(url('/')); ?>",
      "logo": "<?php echo e(asset('images/logo.png')); ?>",
      "contactPoint": {
        "@type": "ContactPoint",
        "telephone": "+62-21-555-0198",
        "contactType": "customer service",
        "email": "inquiries@cahayainterior.com"
      },
      "sameAs": [
        "https://instagram.com/cahayainteriorsejahtera",
        "https://tiktok.com/@cahayainteriorsejahtera"
      ]
    }
    </script>

    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "LocalBusiness",
      "@id": "<?php echo e(url('/')); ?>/#localbusiness",
      "name": "Cahaya Interior Sejahtera",
      "image": "<?php echo e(asset('images/logo.png')); ?>",
      "telephone": "+62-21-555-0198",
      "email": "inquiries@cahayainterior.com",
      "priceRange": "$$$",
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "Jl. Griya Alam Sentosa No.A6, Pasir Angin, Kec. Bantar Gebang",
        "addressLocality": "Kabupaten Bogor",
        "addressRegion": "Jawa Barat",
        "postalCode": "16820",
        "addressCountry": "ID"
      },
      "geo": {
        "@type": "GeoCoordinates",
        "latitude": -6.2241,
        "longitude": 106.8122
      },
      "url": "<?php echo e(url('/')); ?>",
      "openingHoursSpecification": [
        {
          "@type": "OpeningHoursSpecification",
          "dayOfWeek": [
            "Monday",
            "Tuesday",
            "Wednesday",
            "Thursday",
            "Friday"
          ],
          "opens": "09:00",
          "closes": "18:00"
        }
      ]
    }
    </script>

    <?php echo $__env->yieldContent('schema'); ?>
</head>
<body class="bg-background text-on-background antialiased selection:bg-tertiary-fixed-dim selection:text-on-tertiary-fixed">

    <!-- Top Navigation -->
    <?php if (isset($component)) { $__componentOriginalf75d29720390c8e1fa3307604849a543 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalf75d29720390c8e1fa3307604849a543 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.navigation','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('navigation'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>

<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalf75d29720390c8e1fa3307604849a543)): ?>
<?php $attributes = $__attributesOriginalf75d29720390c8e1fa3307604849a543; ?>
<?php unset($__attributesOriginalf75d29720390c8e1fa3307604849a543); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalf75d29720390c8e1fa3307604849a543)): ?>
<?php $component = $__componentOriginalf75d29720390c8e1fa3307604849a543; ?>
<?php unset($__componentOriginalf75d29720390c8e1fa3307604849a543); ?>
<?php endif; ?>

    <!-- Main Content Content -->
    <?php echo $__env->yieldContent('content'); ?>

    <!-- Footer -->
    <?php if (isset($component)) { $__componentOriginal8a8716efb3c62a45938aca52e78e0322 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal8a8716efb3c62a45938aca52e78e0322 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.footer','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('footer'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>

<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal8a8716efb3c62a45938aca52e78e0322)): ?>
<?php $attributes = $__attributesOriginal8a8716efb3c62a45938aca52e78e0322; ?>
<?php unset($__attributesOriginal8a8716efb3c62a45938aca52e78e0322); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8a8716efb3c62a45938aca52e78e0322)): ?>
<?php $component = $__componentOriginal8a8716efb3c62a45938aca52e78e0322; ?>
<?php unset($__componentOriginal8a8716efb3c62a45938aca52e78e0322); ?>
<?php endif; ?>

</body>
</html><?php /**PATH C:\laragon\www\cis\resources\views/layouts/app.blade.php ENDPATH**/ ?>