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

    <!-- Tailwind via Vite build (replaces CDN) -->
    <?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css', 'resources/js/app.js']); ?>

    <!-- Alpine.js -->
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
      "description": "Jasa desain interior dan pengerjaan interior untuk rumah, kantor, dan ruang komersial.",
      "contactPoint": {
        "@type": "ContactPoint",
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
      "@context": "https://schema.org",
      "@type": "LocalBusiness",
      "@id": "<?php echo e(url('/')); ?>/#localbusiness",
      "name": "Cahaya Interior Sejahtera",
      "image": "<?php echo e(asset('images/logo.png')); ?>",
      "description": "Jasa desain interior dan pengerjaan interior untuk rumah, kantor, dan ruang komersial. Melayani area Bogor, Jakarta, dan sekitarnya.",
      "telephone": "+62-857-7675-5884",
      "email": "cahayainteriorsejahtera@gmail.com",
      "priceRange": "$$$",
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "Jl Griya Alam Sentosa No 101 Dusun Pasir Angin Cileungsi Bogor Jawa Barat",
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
        },
        {
          "@type": "OpeningHoursSpecification",
          "dayOfWeek": "Saturday",
          "opens": "09:00",
          "closes": "18:00",
          "description": "By appointment only"
        }
      ],
      "areaServed": [
        {
          "@type": "City",
          "name": "Bogor"
        },
        {
          "@type": "City",
          "name": "Jakarta"
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
</html><?php /**PATH C:\Users\ridwa\cis\resources\views/layouts/app.blade.php ENDPATH**/ ?>