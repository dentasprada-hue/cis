<?php
    $currentLocale = app()->getLocale();
    $currentRouteName = Route::currentRouteName();
    $routeParams = Route::current()->parameters();
    
    // Remove locale from route params as we'll set it manually
    unset($routeParams['locale']);
    
    // Generate URLs for both locales
    $idUrl = route($currentRouteName, array_merge(['locale' => 'id'], $routeParams));
    $enUrl = route($currentRouteName, array_merge(['locale' => 'en'], $routeParams));
?>

<div class="flex items-center gap-2">
    <a href="<?php echo e($idUrl); ?>" 
       class="<?php echo e($currentLocale === 'id' ? 'font-bold text-primary' : 'text-secondary hover:text-primary'); ?> transition-colors text-sm">
       ID
    </a>
    <span class="text-outline-variant">|</span>
    <a href="<?php echo e($enUrl); ?>" 
       class="<?php echo e($currentLocale === 'en' ? 'font-bold text-primary' : 'text-secondary hover:text-primary'); ?> transition-colors text-sm">
       EN
    </a>
</div>
<?php /**PATH C:\laragon\www\cis\resources\views/components/language-switcher.blade.php ENDPATH**/ ?>