<?php $__env->startSection('title', ($project->seo_title ?? $project->title) . ' - Cahaya Interior Sejahtera'); ?>
<?php $__env->startSection('meta_description', $project->seo_description ?? $project->short_description); ?>
<?php $__env->startSection('og_type', 'article'); ?>
<?php $__env->startSection('og_image', $project->featured_image_url); ?>

<?php $__env->startSection('schema'); ?>
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "CreativeWork",
  "name": "<?php echo e($project->title); ?>",
  "description": "<?php echo e($project->short_description); ?>",
  "image": "<?php echo e($project->featured_image_url); ?>",
  "author": { "@type": "Organization", "name": "Cahaya Interior Sejahtera" },
  "creator": { "@type": "Organization", "name": "Cahaya Interior Sejahtera" },
  "dateCreated": "<?php echo e($project->year); ?>",
  "locationCreated": { "@type": "Place", "name": "<?php echo e($project->location); ?>" }
}
</script>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<!-- Hero Section (unchanged width/structure) -->
<section class="relative h-[300px] sm:h-[420px] md:h-[560px] lg:h-[700px] overflow-hidden">
    <div class="absolute inset-0">
        <img alt="<?php echo e($project->title); ?>" class="w-full h-full object-cover" src="<?php echo e($project->featured_image_url); ?>">
        <div class="absolute inset-0 bg-black/40"></div>
    </div>
    <div class="relative z-10 h-full flex items-end px-margin-mobile md:px-margin-desktop max-w-container-max mx-auto pb-8 md:pb-16">
        <div class="max-w-3xl">
            <div class="flex items-center gap-3 mb-3 md:mb-4">
                <span class="font-label-md text-label-md text-white uppercase tracking-widest"><?php echo e($project->category); ?></span>
                <span class="w-1 h-1 rounded-full bg-white/50"></span>
                <span class="font-label-md text-label-md text-white/80"><?php echo e($project->year); ?></span>
            </div>
            <h1 class="font-headline-xl text-[28px] sm:text-[40px] md:text-headline-xl text-white mb-3 md:mb-4 leading-tight"><?php echo e($project->concept ?? $project->title); ?></h1>
            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($project->concept && $project->function): ?>
            <p class="font-body-md text-body-md text-white/80 mb-3 md:mb-4"><?php echo e($project->function); ?></p>
            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
        </div>
    </div>
</section>

<!-- Split Section: Gallery (left) + Details Card (right, sticky) -->
<?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($project->gallery_images && count($project->gallery_images) > 0): ?>
<section class="py-12 md:py-section-gap px-margin-mobile md:px-margin-desktop max-w-container-max mx-auto">
    <div class="grid grid-cols-1 md:grid-cols-12 gap-10 md:gap-gutter">
        <!-- Left: Gallery Grid -->
        <div class="md:col-span-8">
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-5 md:gap-gutter">
                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::openLoop(); ?><?php endif; ?><?php $__currentLoopData = $project->gallery_image_urls; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::startLoopIteration(); ?><?php endif; ?>
                <div class="aspect-[4/3] rounded-xl overflow-hidden shadow-level-1">
                    <img alt="<?php echo e($project->title); ?> gallery image" class="w-full h-full object-cover hover:scale-105 transition-transform duration-500" src="<?php echo e($image); ?>">
                </div>
                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::endLoop(); ?><?php endif; ?><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::closeLoop(); ?><?php endif; ?>
            </div>
        </div>

        <!-- Right: Project Details Card (sticky) -->
        <div class="md:col-span-4">
            <div class="bg-surface-container-lowest p-6 md:p-8 rounded-xl shadow-level-1 md:sticky md:top-[100px]">
                <h3 class="font-headline-md text-[22px] md:text-headline-md text-primary mb-5 md:mb-6"><?php echo e(__('projects.detail_sidebar_title')); ?></h3>
                <div class="space-y-5 md:space-y-6">
                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($project->concept): ?>
                    <div>
                        <p class="font-label-md text-label-md text-secondary mb-1"><?php echo e(__('projects.detail_concept')); ?></p>
                        <p class="font-body-md text-body-md text-primary"><?php echo e($project->concept); ?></p>
                    </div>
                    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($project->function): ?>
                    <div>
                        <p class="font-label-md text-label-md text-secondary mb-1"><?php echo e(__('projects.detail_function')); ?></p>
                        <p class="font-body-md text-body-md text-primary"><?php echo e($project->function); ?></p>
                    </div>
                    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                    <div>
                        <p class="font-label-md text-label-md text-secondary mb-1"><?php echo e(__('projects.detail_location')); ?></p>
                        <p class="font-body-md text-body-md text-primary"><?php echo e($project->location); ?></p>
                    </div>
                    <div>
                        <p class="font-label-md text-label-md text-secondary mb-1"><?php echo e(__('projects.detail_category')); ?></p>
                        <p class="font-body-md text-body-md text-primary"><?php echo e($project->category); ?></p>
                    </div>
                    <div>
                        <p class="font-label-md text-label-md text-secondary mb-1"><?php echo e(__('projects.detail_year')); ?></p>
                        <p class="font-body-md text-body-md text-primary"><?php echo e($project->year); ?></p>
                    </div>
                    <div>
                        <p class="font-label-md text-label-md text-secondary mb-1"><?php echo e(__('projects.detail_scale')); ?></p>
                        <p class="font-body-md text-body-md text-primary"><?php echo e($project->scale); ?></p>
                    </div>
                </div>
                <div class="mt-6 md:mt-8 pt-5 md:pt-6 border-t border-outline-variant/30">
                    <a href="<?php echo e(route('contact')); ?>" class="inline-flex items-center gap-2 font-label-lg text-label-lg text-primary border-b border-primary pb-1 hover:opacity-70 transition-opacity">
                        <?php echo e(__('projects.detail_inquire')); ?> <span class="material-symbols-outlined text-[18px]">arrow_forward</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

<!-- Related Projects -->
<?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($relatedProjects && count($relatedProjects) > 0): ?>
<section class="py-12 md:py-section-gap bg-surface-container-lowest px-margin-mobile md:px-margin-desktop max-w-container-max mx-auto">
    <div class="flex flex-col sm:flex-row sm:justify-between sm:items-end gap-3 mb-8 md:mb-12">
        <div>
            <h2 class="font-headline-lg text-[26px] md:text-headline-lg text-primary mb-1 md:mb-2"><?php echo e(__('projects.detail_related')); ?></h2>
            <p class="font-body-md text-body-md text-secondary"><?php echo e($project->category); ?></p>
        </div>
        <a href="<?php echo e(route('projects', ['category' => $project->category])); ?>" class="inline-flex items-center gap-2 font-label-lg text-label-lg text-primary hover:opacity-70 transition-opacity shrink-0">
            <?php echo e(__('projects.detail_view_all_category')); ?> <span class="material-symbols-outlined text-[18px]">arrow_forward</span>
        </a>
    </div>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6 md:gap-gutter">
        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::openLoop(); ?><?php endif; ?><?php $__currentLoopData = $relatedProjects; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $relatedProject): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::startLoopIteration(); ?><?php endif; ?>
        <div class="group cursor-pointer">
            <a href="<?php echo e(route('projects.detail', ['slug' => $relatedProject->slug])); ?>">
                <div class="relative h-[220px] sm:h-[260px] md:h-[300px] overflow-hidden rounded-xl mb-4 bg-surface-variant">
                    <img alt="<?php echo e($relatedProject->title); ?>" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105" src="<?php echo e($relatedProject->featured_image_url); ?>">
                </div>
                <h3 class="font-headline-sm text-[20px] md:text-headline-sm text-primary"><?php echo e($relatedProject->title); ?></h3>
                <p class="font-body-sm text-body-sm text-secondary mt-1"><?php echo e($relatedProject->location); ?> • <?php echo e($relatedProject->year); ?></p>
            </a>
        </div>
        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::endLoop(); ?><?php endif; ?><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::closeLoop(); ?><?php endif; ?>
    </div>
</section>
<?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

<!-- CTA Section -->
<section class="py-12 md:py-section-gap px-margin-mobile md:px-margin-desktop text-center max-w-3xl mx-auto">
    <h2 class="font-headline-lg text-[26px] sm:text-[36px] md:text-headline-lg text-primary mb-4 md:mb-6 leading-tight"><?php echo e(__('projects.detail_cta_title')); ?></h2>
    <p class="font-body-lg text-body-lg text-secondary mb-8 md:mb-10"><?php echo e(__('projects.detail_cta_subtitle')); ?></p>
    <a href="<?php echo e(route('contact')); ?>" class="inline-block w-full sm:w-auto px-8 md:px-10 py-4 bg-primary text-on-primary rounded-lg font-label-lg text-label-lg hover:bg-inverse-surface transition-colors shadow-level-1 text-center">
        <?php echo e(__('projects.detail_cta_button')); ?>

    </a>
</section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\ridwa\cis\resources\views/pages/project-detail.blade.php ENDPATH**/ ?>