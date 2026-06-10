@extends('layouts.app')

@section('title', ($project->seo_title ?? $project->title) . ' - Cahaya Interior Sejahtera')
@section('meta_description', $project->seo_description ?? $project->short_description)
@section('og_type', 'article')
@section('og_image', $project->featured_image_url)

@section('schema')
<script type="application/ld+json">
{
  "@@context": "https://schema.org",
  "@@type": "CreativeWork",
  "name": "{{ $project->title }}",
  "description": "{{ $project->short_description }}",
  "image": "{{ $project->featured_image_url }}",
  "author": { "@@type": "Organization", "name": "Cahaya Interior Sejahtera" },
  "creator": { "@@type": "Organization", "name": "Cahaya Interior Sejahtera" },
  "dateCreated": "{{ $project->year }}",
  "locationCreated": { "@@type": "Place", "name": "{{ $project->location }}" }
}
</script>
@endsection

@section('content')
<!-- Hero Section -->
<section class="relative h-[300px] sm:h-[420px] md:h-[560px] lg:h-[700px] overflow-hidden">
    <div class="absolute inset-0">
        <img alt="{{ $project->title }}" class="w-full h-full object-cover" src="{{ $project->featured_image_url }}">
        <div class="absolute inset-0 bg-black/40"></div>
    </div>
    <div class="relative z-10 h-full flex items-end px-margin-mobile md:px-margin-desktop max-w-container-max mx-auto pb-8 md:pb-16">
        <div class="max-w-3xl">
            <div class="flex items-center gap-3 mb-3 md:mb-4">
                <span class="font-label-md text-label-md text-white uppercase tracking-widest">{{ $project->category }}</span>
                <span class="w-1 h-1 rounded-full bg-white/50"></span>
                <span class="font-label-md text-label-md text-white/80">{{ $project->year }}</span>
            </div>
            <h1 class="font-headline-xl text-[28px] sm:text-[40px] md:text-headline-xl text-white mb-3 md:mb-4 leading-tight">{{ $project->title }}</h1>
            <p class="font-body-lg text-[15px] md:text-body-lg text-white/90 max-w-2xl line-clamp-3 md:line-clamp-none">{{ $project->short_description }}</p>
        </div>
    </div>
</section>

<!-- Project Details -->
<section class="py-12 md:py-section-gap px-margin-mobile md:px-margin-desktop max-w-container-max mx-auto">
    <div class="grid grid-cols-1 md:grid-cols-12 gap-10 md:gap-gutter">
        <!-- Main Content -->
        <div class="md:col-span-8 order-2 md:order-1">
            <div class="prose prose-lg max-w-none">
                {!! $project->description !!}
            </div>
        </div>

        <!-- Sidebar Info -->
        <div class="md:col-span-4 order-1 md:order-2">
            <div class="bg-surface-container-lowest p-6 md:p-8 rounded-xl shadow-level-1 md:sticky md:top-[100px]">
                <h3 class="font-headline-md text-[22px] md:text-headline-md text-primary mb-5 md:mb-6">{{ __('projects.detail_sidebar_title') }}</h3>
                <div class="grid grid-cols-2 md:grid-cols-1 gap-4 md:gap-6">
                    <div>
                        <p class="font-label-md text-label-md text-secondary mb-1">{{ __('projects.detail_location') }}</p>
                        <p class="font-body-md text-body-md text-primary">{{ $project->location }}</p>
                    </div>
                    <div>
                        <p class="font-label-md text-label-md text-secondary mb-1">{{ __('projects.detail_category') }}</p>
                        <p class="font-body-md text-body-md text-primary">{{ $project->category }}</p>
                    </div>
                    <div>
                        <p class="font-label-md text-label-md text-secondary mb-1">{{ __('projects.detail_year') }}</p>
                        <p class="font-body-md text-body-md text-primary">{{ $project->year }}</p>
                    </div>
                    <div>
                        <p class="font-label-md text-label-md text-secondary mb-1">{{ __('projects.detail_scale') }}</p>
                        <p class="font-body-md text-body-md text-primary">{{ $project->scale }}</p>
                    </div>
                </div>
                <div class="mt-6 md:mt-8 pt-5 md:pt-6 border-t border-outline-variant/30">
                    <a href="{{ route('contact') }}" class="inline-flex items-center gap-2 font-label-lg text-label-lg text-primary border-b border-primary pb-1 hover:opacity-70 transition-opacity">
                        {{ __('projects.detail_inquire') }} <span class="material-symbols-outlined text-[18px]">arrow_forward</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Gallery -->
@if($project->gallery_images && count($project->gallery_images) > 0)
<section class="py-12 md:py-section-gap bg-surface-container-lowest">
    <div class="px-margin-mobile md:px-margin-desktop max-w-container-max mx-auto">
        <h2 class="font-headline-lg text-[26px] md:text-headline-lg text-primary mb-8 md:mb-12">{{ __('projects.detail_gallery') }}</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-5 md:gap-gutter">
            @foreach($project->gallery_image_urls as $image)
            <div class="aspect-[4/3] rounded-xl overflow-hidden shadow-level-1">
                <img alt="{{ $project->title }} gallery image" class="w-full h-full object-cover hover:scale-105 transition-transform duration-500" src="{{ $image }}">
            </div>
            @endforeach
        </div>
    </div>
</section>
@endif

<!-- Related Projects -->
@if($relatedProjects && count($relatedProjects) > 0)
<section class="py-12 md:py-section-gap px-margin-mobile md:px-margin-desktop max-w-container-max mx-auto">
    <div class="flex flex-col sm:flex-row sm:justify-between sm:items-end gap-3 mb-8 md:mb-12">
        <div>
            <h2 class="font-headline-lg text-[26px] md:text-headline-lg text-primary mb-1 md:mb-2">{{ __('projects.detail_related') }}</h2>
            <p class="font-body-md text-body-md text-secondary">{{ $project->category }}</p>
        </div>
        <a href="{{ route('projects', ['category' => $project->category]) }}" class="inline-flex items-center gap-2 font-label-lg text-label-lg text-primary hover:opacity-70 transition-opacity shrink-0">
            {{ __('projects.detail_view_all_category') }} <span class="material-symbols-outlined text-[18px]">arrow_forward</span>
        </a>
    </div>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6 md:gap-gutter">
        @foreach($relatedProjects as $relatedProject)
        <div class="group cursor-pointer">
            <a href="{{ route('projects.detail', ['slug' => $relatedProject->slug]) }}">
                <div class="relative h-[220px] sm:h-[260px] md:h-[300px] overflow-hidden rounded-xl mb-4 bg-surface-variant">
                    <img alt="{{ $relatedProject->title }}" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105" src="{{ $relatedProject->featured_image_url }}">
                </div>
                <h3 class="font-headline-sm text-[20px] md:text-headline-sm text-primary">{{ $relatedProject->title }}</h3>
                <p class="font-body-sm text-body-sm text-secondary mt-1">{{ $relatedProject->location }} • {{ $relatedProject->year }}</p>
            </a>
        </div>
        @endforeach
    </div>
</section>
@endif

<!-- CTA Section -->
<section class="py-12 md:py-section-gap px-margin-mobile md:px-margin-desktop text-center max-w-3xl mx-auto">
    <h2 class="font-headline-lg text-[26px] sm:text-[36px] md:text-headline-lg text-primary mb-4 md:mb-6 leading-tight">{{ __('projects.detail_cta_title') }}</h2>
    <p class="font-body-lg text-body-lg text-secondary mb-8 md:mb-10">{{ __('projects.detail_cta_subtitle') }}</p>
    <a href="{{ route('contact') }}" class="inline-block w-full sm:w-auto px-8 md:px-10 py-4 bg-primary text-on-primary rounded-lg font-label-lg text-label-lg hover:bg-inverse-surface transition-colors shadow-level-1 text-center">
        {{ __('projects.detail_cta_button') }}
    </a>
</section>
@endsection
