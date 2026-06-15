<nav x-data="{ mobileMenuOpen: false }" class="fixed top-0 w-full z-50 bg-surface/95 backdrop-blur-md border-b border-outline-variant/30">
    <div class="flex justify-between items-center px-4 sm:px-6 md:px-margin-desktop py-3 md:py-4 max-w-container-max mx-auto">

        <!-- Logo + Brand -->
        <a class="flex items-center gap-2 hover:opacity-80 transition-opacity duration-300 min-w-0" href="<?php echo e(route('home')); ?>">
            <img src="<?php echo e(asset('images/logo.png')); ?>"
                 alt="Logo Cahaya Interior Sejahtera"
                 class="h-9 sm:h-10 md:h-12 w-auto object-contain shrink-0">
            <div class="flex flex-col leading-tight min-w-0">
                <span class="font-semibold text-[12px] sm:text-[14px] md:text-[17px] tracking-tight text-primary truncate">
                    Cahaya Interior
                </span>
                <span class="text-[9px] sm:text-[10px] md:text-[11px] tracking-[0.15em] text-secondary uppercase">
                    Sejahtera
                </span>
            </div>
        </a>

        <!-- Desktop Nav -->
        <div class="hidden md:flex gap-5 lg:gap-8 items-center">
            <a class="font-label-lg text-label-lg whitespace-nowrap <?php echo e(Route::is('home') ? 'text-primary border-b-2 border-primary pb-1' : 'text-secondary hover:text-primary transition-colors'); ?>"
               href="<?php echo e(route('home')); ?>"><?php echo e(__('nav.home')); ?></a>
            <a class="font-label-lg text-label-lg whitespace-nowrap <?php echo e(Route::is('about') ? 'text-primary border-b-2 border-primary pb-1' : 'text-secondary hover:text-primary transition-colors'); ?>"
               href="<?php echo e(route('about')); ?>"><?php echo e(__('nav.about')); ?></a>
            <a class="font-label-lg text-label-lg whitespace-nowrap <?php echo e(Route::is('projects*') ? 'text-primary border-b-2 border-primary pb-1' : 'text-secondary hover:text-primary transition-colors'); ?>"
               href="<?php echo e(route('projects')); ?>"><?php echo e(__('nav.projects')); ?></a>
            <a class="font-label-lg text-label-lg whitespace-nowrap <?php echo e(Route::is('contact') ? 'text-primary border-b-2 border-primary pb-1' : 'text-secondary hover:text-primary transition-colors'); ?>"
               href="<?php echo e(route('contact')); ?>"><?php echo e(__('nav.contact')); ?></a>
            <?php if (isset($component)) { $__componentOriginal8d3bff7d7383a45350f7495fc470d934 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal8d3bff7d7383a45350f7495fc470d934 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.language-switcher','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('language-switcher'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>

<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal8d3bff7d7383a45350f7495fc470d934)): ?>
<?php $attributes = $__attributesOriginal8d3bff7d7383a45350f7495fc470d934; ?>
<?php unset($__attributesOriginal8d3bff7d7383a45350f7495fc470d934); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8d3bff7d7383a45350f7495fc470d934)): ?>
<?php $component = $__componentOriginal8d3bff7d7383a45350f7495fc470d934; ?>
<?php unset($__componentOriginal8d3bff7d7383a45350f7495fc470d934); ?>
<?php endif; ?>
            <a class="ml-1 px-4 py-2 bg-premium-brass text-on-primary rounded font-label-lg text-label-lg hover:opacity-90 transition-opacity whitespace-nowrap"
               href="<?php echo e(route('contact')); ?>">Inquire</a>
        </div>

        <!-- Mobile right: lang + hamburger -->
        <div class="flex items-center gap-1 md:hidden shrink-0">
            <?php if (isset($component)) { $__componentOriginal8d3bff7d7383a45350f7495fc470d934 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal8d3bff7d7383a45350f7495fc470d934 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.language-switcher','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('language-switcher'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>

<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal8d3bff7d7383a45350f7495fc470d934)): ?>
<?php $attributes = $__attributesOriginal8d3bff7d7383a45350f7495fc470d934; ?>
<?php unset($__attributesOriginal8d3bff7d7383a45350f7495fc470d934); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8d3bff7d7383a45350f7495fc470d934)): ?>
<?php $component = $__componentOriginal8d3bff7d7383a45350f7495fc470d934; ?>
<?php unset($__componentOriginal8d3bff7d7383a45350f7495fc470d934); ?>
<?php endif; ?>
            <button @click="mobileMenuOpen = !mobileMenuOpen"
                    class="text-primary p-2 focus:outline-none"
                    aria-label="Toggle menu">
                <span class="material-symbols-outlined text-[26px]"
                      x-text="mobileMenuOpen ? 'close' : 'menu'">menu</span>
            </button>
        </div>
    </div>

    <!-- Mobile Menu -->
    <div x-show="mobileMenuOpen"
         x-transition:enter="transition ease-out duration-200"
         x-transition:enter-start="opacity-0 -translate-y-2"
         x-transition:enter-end="opacity-100 translate-y-0"
         x-transition:leave="transition ease-in duration-150"
         x-transition:leave-start="opacity-100 translate-y-0"
         x-transition:leave-end="opacity-0 -translate-y-2"
         class="md:hidden absolute top-full left-0 w-full bg-surface border-b border-outline-variant/30 z-40 shadow-[0px_8px_30px_rgba(0,0,0,0.10)]"
         style="display: none;">
        <div class="flex flex-col px-4 sm:px-6 py-2">
            <a @click="mobileMenuOpen = false" href="<?php echo e(route('home')); ?>"
               class="py-4 border-b border-outline-variant/20 font-label-lg text-label-lg <?php echo e(Route::is('home') ? 'text-primary' : 'text-secondary'); ?>">
               <?php echo e(__('nav.home')); ?>

            </a>
            <a @click="mobileMenuOpen = false" href="<?php echo e(route('about')); ?>"
               class="py-4 border-b border-outline-variant/20 font-label-lg text-label-lg <?php echo e(Route::is('about') ? 'text-primary' : 'text-secondary'); ?>">
               <?php echo e(__('nav.about')); ?>

            </a>
            <a @click="mobileMenuOpen = false" href="<?php echo e(route('projects')); ?>"
               class="py-4 border-b border-outline-variant/20 font-label-lg text-label-lg <?php echo e(Route::is('projects*') ? 'text-primary' : 'text-secondary'); ?>">
               <?php echo e(__('nav.projects')); ?>

            </a>
            <a @click="mobileMenuOpen = false" href="<?php echo e(route('contact')); ?>"
               class="py-4 border-b border-outline-variant/20 font-label-lg text-label-lg <?php echo e(Route::is('contact') ? 'text-primary' : 'text-secondary'); ?>">
               <?php echo e(__('nav.contact')); ?>

            </a>
            <a @click="mobileMenuOpen = false" href="<?php echo e(route('contact')); ?>"
               class="my-4 px-6 py-3 bg-premium-brass text-on-primary text-center rounded font-label-lg text-label-lg">
               Inquire
            </a>
        </div>
    </div>
</nav>

<!-- Spacer -->
<div class="h-[60px] sm:h-[64px] md:h-[76px]"></div>
<?php /**PATH C:\Users\ridwa\cis\resources\views/components/navigation.blade.php ENDPATH**/ ?>