<?php $__env->startSection('title', 'Proyek Interior - Cahaya Interior Sejahtera'); ?>
<?php $__env->startSection('meta_description', 'Lihat portofolio proyek desain interior Cahaya Interior Sejahtera. Interior rumah, kantor, furniture custom, kitchen set, dan renovasi interior.'); ?>

<?php $__env->startSection('content'); ?>
<main class="pt-16 md:pt-24 pb-16 md:pb-section-gap">
    <!-- Hero Header -->
    <header class="max-w-container-max mx-auto px-margin-mobile md:px-margin-desktop mb-8 md:mb-16">
        <h1 class="font-headline-xl text-[32px] sm:text-[44px] md:text-headline-xl text-primary mb-4 md:mb-6 max-w-3xl leading-tight"><?php echo e(__('projects.title')); ?></h1>
        <p class="font-body-lg text-body-lg text-secondary max-w-2xl"><?php echo e(__('projects.subtitle')); ?></p>
    </header>

    <!-- Filters Container -->
    <div class="max-w-container-max mx-auto px-margin-mobile md:px-margin-desktop mb-8 md:mb-gutter sticky top-[68px] md:top-[80px] z-40 bg-surface-container-lowest/90 backdrop-blur-md py-4 shadow-sm">
        <div class="overflow-x-auto -mx-margin-mobile px-margin-mobile md:mx-0 md:px-0">
            <ul class="flex gap-5 md:gap-8 pb-2 min-w-max md:min-w-0 md:flex-wrap">
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



    <!-- Grid Gallery (Identical Heights & Aligned Rows) -->
    <section class="max-w-container-max mx-auto px-margin-mobile md:px-margin-desktop mb-16 md:mb-24">
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 md:gap-gutter">
            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::openLoop(); ?><?php endif; ?><?php $__currentLoopData = $projects; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $project): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::startLoopIteration(); ?><?php endif; ?>
            <article class="bg-surface-container-lowest rounded-card overflow-hidden shadow-level-1 hover:shadow-level-2 transition-shadow duration-300 group cursor-pointer border border-surface-variant/30 h-full flex flex-col">
                <a href="<?php echo e(route('projects.detail', ['slug' => $project->slug])); ?>" class="h-full flex flex-col flex-grow">
                    <div class="relative overflow-hidden aspect-[4/3] w-full shrink-0">
                        <img alt="<?php echo e($project->title); ?>" class="absolute inset-0 w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-700" src="<?php echo e($project->featured_image_url); ?>">
                    </div>
                    <div class="p-5 md:p-6 flex flex-col flex-grow min-h-[130px] md:min-h-[150px]">
                        <div class="h-12 md:h-16 mb-4 overflow-hidden">
                            <h3 class="font-headline-sm text-[20px] md:text-headline-sm text-primary line-clamp-2 leading-snug"><?php echo e($project->title); ?></h3>
                        </div>
                        <div class="mt-auto flex flex-wrap items-center gap-2 font-label-md text-label-md text-secondary">
                            <span><?php echo e($project->category); ?></span>
                            <span class="w-1 h-1 rounded-full bg-outline-variant"></span>
                            <span><?php echo e($project->location); ?></span>
                            <span class="w-1 h-1 rounded-full bg-outline-variant"></span>
                            <span><?php echo e($project->year); ?></span>
                            <span class="w-1 h-1 rounded-full bg-outline-variant"></span>
                            <span><?php echo e($project->scale); ?> sqm</span>
                        </div>
                    </div>
                </a>
            </article>

            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::endLoop(); ?><?php endif; ?><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::closeLoop(); ?><?php endif; ?>
        </div>
        <div class="mt-16 md:mt-24 text-center">
            <button class="font-label-lg text-label-lg text-primary border border-primary px-8 py-4 rounded-button hover:bg-primary hover:text-on-primary transition-colors duration-300 w-full sm:w-auto">
                <?php echo e(__('projects.load_more')); ?>

            </button>
        </div>
    </section>
</main>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\ridwa\cis\resources\views/pages/projects.blade.php ENDPATH**/ ?>