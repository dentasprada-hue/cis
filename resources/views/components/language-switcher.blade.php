@php
    $currentLocale = app()->getLocale();
    $currentRouteName = Route::currentRouteName();
    $routeParams = Route::current()->parameters();
    
    // Remove locale from route params as we'll set it manually
    unset($routeParams['locale']);
    
    // Generate URLs for both locales
    $idUrl = route($currentRouteName, array_merge(['locale' => 'id'], $routeParams));
    $enUrl = route($currentRouteName, array_merge(['locale' => 'en'], $routeParams));
@endphp

<div class="flex items-center gap-2">
    <a href="{{ $idUrl }}" 
       class="{{ $currentLocale === 'id' ? 'font-bold text-primary' : 'text-secondary hover:text-primary' }} transition-colors text-sm">
       ID
    </a>
    <span class="text-outline-variant">|</span>
    <a href="{{ $enUrl }}" 
       class="{{ $currentLocale === 'en' ? 'font-bold text-primary' : 'text-secondary hover:text-primary' }} transition-colors text-sm">
       EN
    </a>
</div>
