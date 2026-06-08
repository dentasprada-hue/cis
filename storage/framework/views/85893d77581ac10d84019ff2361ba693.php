<nav x-data="{ mobileMenuOpen: false }" class="fixed top-0 w-full z-50 bg-surface/80 backdrop-blur-md border-b border-outline-variant/30 transition-all duration-300 ease-in-out">
    <div class="flex justify-between items-center px-margin-mobile md:px-margin-desktop py-6 max-w-container-max mx-auto">
        <!-- Logo -->
        <a class="font-headline-sm text-headline-sm tracking-tighter text-primary hover:opacity-70 transition-opacity duration-300" href="<?php echo e(route('home')); ?>">
            Cahaya Interior Sejahtera
        </a>

        <!-- Desktop Nav Links -->
        <div class="hidden md:flex gap-8 items-center">
            <a class="font-label-lg text-label-lg <?php echo e(Route::is('home') ? 'text-primary border-b-2 border-primary pb-1' : 'text-secondary hover:text-primary transition-colors'); ?>" href="<?php echo e(route('home')); ?>">Home</a>
            <a class="font-label-lg text-label-lg <?php echo e(Route::is('about') ? 'text-primary border-b-2 border-primary pb-1' : 'text-secondary hover:text-primary transition-colors'); ?>" href="<?php echo e(route('about')); ?>">About Us</a>
            <a class="font-label-lg text-label-lg <?php echo e(Route::is('projects*') ? 'text-primary border-b-2 border-primary pb-1' : 'text-secondary hover:text-primary transition-colors'); ?>" href="<?php echo e(route('projects')); ?>">Projects</a>
            <a class="font-label-lg text-label-lg <?php echo e(Route::is('contact') ? 'text-primary border-b-2 border-primary pb-1' : 'text-secondary hover:text-primary transition-colors'); ?>" href="<?php echo e(route('contact')); ?>">Contact</a>

            <a class="ml-4 px-6 py-2 bg-premium-brass text-on-primary rounded font-label-lg text-label-lg hover:opacity-90 transition-opacity shadow-[0px_4px_20px_rgba(0,0,0,0.04)]" href="<?php echo e(route('contact')); ?>">
                Inquire
            </a>
        </div>

        <!-- Mobile Menu Trigger -->
        <button @click="mobileMenuOpen = !mobileMenuOpen" class="md:hidden text-primary p-2 focus:outline-none" aria-label="Toggle menu">
            <span class="material-symbols-outlined text-3xl" x-text="mobileMenuOpen ? 'close' : 'menu'">menu</span>
        </button>
    </div>

    <!-- Mobile Navigation Menu -->
    <div x-show="mobileMenuOpen"
         x-transition:enter="transition ease-out duration-300"
         x-transition:enter-start="opacity-0 -translate-y-4"
         x-transition:enter-end="opacity-100 translate-y-0"
         x-transition:leave="transition ease-in duration-200"
         x-transition:leave-start="opacity-100 translate-y-0"
         x-transition:leave-end="opacity-0 -translate-y-4"
         class="md:hidden absolute top-full left-0 w-full bg-surface border-b border-outline-variant/30 px-margin-mobile py-6 z-40 shadow-[0px_12px_40px_rgba(0,0,0,0.08)]"
         style="display: none;">
        <div class="flex flex-col gap-6">
            <a @click="mobileMenuOpen = false" class="font-label-lg text-label-lg <?php echo e(Route::is('home') ? 'text-primary' : 'text-secondary'); ?>" href="<?php echo e(route('home')); ?>">Home</a>
            <a @click="mobileMenuOpen = false" class="font-label-lg text-label-lg <?php echo e(Route::is('about') ? 'text-primary' : 'text-secondary'); ?>" href="<?php echo e(route('about')); ?>">About Us</a>
            <a @click="mobileMenuOpen = false" class="font-label-lg text-label-lg <?php echo e(Route::is('projects*') ? 'text-primary' : 'text-secondary'); ?>" href="<?php echo e(route('projects')); ?>">Projects</a>
            <a @click="mobileMenuOpen = false" class="font-label-lg text-label-lg <?php echo e(Route::is('contact') ? 'text-primary' : 'text-secondary'); ?>" href="<?php echo e(route('contact')); ?>">Contact</a>

            <a @click="mobileMenuOpen = false" class="px-6 py-3 bg-premium-brass text-on-primary text-center rounded font-label-lg text-label-lg hover:opacity-90 transition-opacity shadow-[0px_4px_20px_rgba(0,0,0,0.04)]" href="<?php echo e(route('contact')); ?>">
                Inquire
            </a>
        </div>
    </div>
</nav>

<!-- Spacer to prevent content overlap -->
<div class="h-[80px]"></div>
<?php /**PATH C:\Users\ridwa\cis\resources\views/components/navigation.blade.php ENDPATH**/ ?>