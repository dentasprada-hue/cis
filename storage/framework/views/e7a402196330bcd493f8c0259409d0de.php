<?php $__env->startSection('title', 'Proyek Interior - Cahaya Interior Sejahtera'); ?>
<?php $__env->startSection('meta_description', 'Lihat portofolio proyek desain interior Cahaya Interior Sejahtera. Interior rumah, kantor, furniture custom, kitchen set, dan renovasi interior.'); ?>

<?php $__env->startSection('content'); ?>
<main class="pt-[100px] md:pt-[140px] pb-16 md:pb-section-gap">
    <!-- Hero Header -->
    <header class="max-w-container-max mx-auto px-margin-mobile md:px-margin-desktop mb-10 md:mb-section-gap">
        <h1 class="font-headline-xl text-[32px] sm:text-[44px] md:text-headline-xl text-primary mb-4 md:mb-6 max-w-3xl leading-tight"><?php echo e(__('projects.title')); ?></h1>
        <p class="font-body-lg text-body-lg text-secondary max-w-2xl"><?php echo e(__('projects.subtitle')); ?></p>
    </header>

    <!-- Filters Container -->
    <div class="max-w-container-max mx-auto px-margin-mobile md:px-margin-desktop mb-8 md:mb-gutter sticky top-[68px] md:top-[80px] z-40 bg-background/95 backdrop-blur-sm py-3 md:py-4">
        <div class="overflow-x-auto -mx-margin-mobile px-margin-mobile md:mx-0 md:px-0">
            <ul class="flex gap-5 md:gap-8 border-b border-outline-variant/50 pb-2 min-w-max md:min-w-0 md:flex-wrap">
                <li>
                    <a href="<?php echo e(route('projects')); ?>" class="font-label-lg text-label-lg whitespace-nowrap <?php echo e(!$category ? 'text-primary border-b-2 border-primary' : 'text-secondary hover:text-primary'); ?> pb-2 px-1 transition-all"><?php echo e(__('projects.all')); ?></a>
                </li>
                <li>
                    <a href="<?php echo e(route('projects', ['category' => 'Residential'])); ?>" class="font-label-lg text-label-lg whitespace-nowrap <?php echo e($category === 'Residential' ? 'text-primary border-b-2 border-primary' : 'text-secondary hover:text-primary'); ?> pb-2 px-1 transition-all"><?php echo e(__('projects.residential')); ?></a>
                </li>
                <li>
                    <a href="<?php echo e(route('projects', ['category' => 'Commercial'])); ?>" class="font-label-lg text-label-lg whitespace-nowrap <?php echo e($category === 'Commercial' ? 'text-primary border-b-2 border-primary' : 'text-secondary hover:text-primary'); ?> pb-2 px-1 transition-all"><?php echo e(__('projects.commercial')); ?></a>
                </li>
                <li>
                    <a href="<?php echo e(route('projects', ['category' => 'Office'])); ?>" class="font-label-lg text-label-lg whitespace-nowrap <?php echo e($category === 'Office' ? 'text-primary border-b-2 border-primary' : 'text-secondary hover:text-primary'); ?> pb-2 px-1 transition-all"><?php echo e(__('projects.office')); ?></a>
                </li>
                <li>
                    <a href="<?php echo e(route('projects', ['category' => 'Hospitality'])); ?>" class="font-label-lg text-label-lg whitespace-nowrap <?php echo e($category === 'Hospitality' ? 'text-primary border-b-2 border-primary' : 'text-secondary hover:text-primary'); ?> pb-2 px-1 transition-all"><?php echo e(__('projects.hospitality')); ?></a>
                </li>
            </ul>
        </div>
    </div>

    <!-- Featured Project -->
    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($featuredProject): ?>
    <section class="max-w-container-max mx-auto px-margin-mobile md:px-margin-desktop mb-12 md:mb-section-gap">
        <a href="<?php echo e(route('projects.detail', ['slug' => $featuredProject->slug])); ?>" class="block">
            <div class="grid grid-cols-1 md:grid-cols-12 gap-6 md:gap-gutter items-start md:items-center relative group cursor-pointer">
                <!-- Image Column -->
                <div class="md:col-span-8 rounded-card overflow-hidden shadow-level-1 relative h-[260px] sm:h-[380px] md:h-[600px] w-full">
                    <img alt="<?php echo e($featuredProject->title); ?>" class="absolute inset-0 w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-700 ease-in-out" src="<?php echo e($featuredProject->featured_image_url); ?>">
                </div>
                <!-- Content Card -->
                <div class="md:col-span-5 md:-ml-24 md:mt-24 z-10 bg-surface-container-lowest p-6 md:p-10 rounded-card shadow-level-2 transform group-hover:-translate-y-2 transition-transform duration-500 border border-surface-variant/50">
                    <div class="flex items-center gap-3 mb-4 md:mb-6">
                        <span class="h-px w-8 bg-tertiary-fixed-dim"></span>
                        <span class="font-label-md text-label-md text-tertiary-fixed-dim uppercase tracking-widest"><?php echo e(__('projects.featured')); ?></span>
                    </div>
                    <h2 class="font-headline-lg text-[24px] md:text-headline-lg text-primary mb-3 md:mb-4 leading-tight"><?php echo e($featuredProject->title); ?></h2>
                    <p class="font-body-md text-body-md text-secondary mb-6 md:mb-8 leading-relaxed line-clamp-3 md:line-clamp-none"><?php echo e($featuredProject->short_description); ?></p>
                    <div class="flex flex-wrap gap-4 md:gap-8 border-t border-outline-variant/30 pt-4 md:pt-6">
                        <div>
                            <p class="font-label-md text-label-md text-secondary mb-1"><?php echo e(__('projects.location')); ?></p>
                            <p class="font-body-md text-body-md text-primary font-medium"><?php echo e($featuredProject->location); ?></p>
                        </div>
                        <div>
                            <p class="font-label-md text-label-md text-secondary mb-1"><?php echo e(__('projects.year')); ?></p>
                            <p class="font-body-md text-body-md text-primary font-medium"><?php echo e($featuredProject->year); ?></p>
                        </div>
                        <div>
                            <p class="font-label-md text-label-md text-secondary mb-1"><?php echo e(__('projects.scale')); ?></p>
                            <p class="font-body-md text-body-md text-primary font-medium"><?php echo e($featuredProject->scale); ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </a>
    </section>
    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

    <!-- Masonry Grid Gallery -->
    <section class="max-w-container-max mx-auto px-margin-mobile md:px-margin-desktop">
        <div class="columns-1 sm:columns-2 lg:columns-3 gap-5 md:gap-gutter space-y-5 md:space-y-gutter">
            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::openLoop(); ?><?php endif; ?><?php $__currentLoopData = $projects; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $project): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::startLoopIteration(); ?><?php endif; ?>
            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($project->id !== $featuredProject?->id): ?>
            <article class="break-inside-avoid bg-surface-container-lowest rounded-card overflow-hidden shadow-level-1 hover:shadow-level-2 transition-shadow duration-300 group cursor-pointer border border-surface-variant/30">
                <a href="<?php echo e(route('projects.detail', ['slug' => $project->slug])); ?>">
                    <div class="relative overflow-hidden aspect-[4/5]">
                        <img alt="<?php echo e($project->title); ?>" class="w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-700" src="<?php echo e($project->featured_image_url); ?>">
                    </div>
                    <div class="p-5 md:p-6">
                        <h3 class="font-headline-sm text-[20px] md:text-headline-sm text-primary mb-2"><?php echo e($project->title); ?></h3>
                        <div class="flex flex-wrap items-center gap-2 font-label-md text-label-md text-secondary">
                            <span><?php echo e($project->category); ?></span>
                            <span class="w-1 h-1 rounded-full bg-outline-variant"></span>
                            <span><?php echo e($project->location); ?></span>
                            <span class="w-1 h-1 rounded-full bg-outline-variant"></span>
                            <span><?php echo e($project->year); ?></span>
                        </div>
                    </div>
                </a>
            </article>
            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::endLoop(); ?><?php endif; ?><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::closeLoop(); ?><?php endif; ?>
        </div>
        <div class="mt-12 md:mt-16 text-center">
            <button class="font-label-lg text-label-lg text-primary border border-primary px-8 py-4 rounded-button hover:bg-primary hover:text-on-primary transition-colors duration-300 w-full sm:w-auto">
                <?php echo e(__('projects.load_more')); ?>

            </button>
        </div>
    </section>
</main>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\ridwa\cis\resources\views/pages/projects.blade.php ENDPATH**/ ?>