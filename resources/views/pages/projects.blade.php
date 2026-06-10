@extends('layouts.app')

@section('title', 'Proyek Interior - Cahaya Interior Sejahtera')
@section('meta_description', 'Lihat portofolio proyek desain interior Cahaya Interior Sejahtera. Interior rumah, kantor, furniture custom, kitchen set, dan renovasi interior.')

@section('content')
<main class="pt-[100px] md:pt-[140px] pb-16 md:pb-section-gap">
    <!-- Hero Header -->
    <header class="max-w-container-max mx-auto px-margin-mobile md:px-margin-desktop mb-10 md:mb-section-gap">
        <h1 class="font-headline-xl text-[32px] sm:text-[44px] md:text-headline-xl text-primary mb-4 md:mb-6 max-w-3xl leading-tight">{{ __('projects.title') }}</h1>
        <p class="font-body-lg text-body-lg text-secondary max-w-2xl">{{ __('projects.subtitle') }}</p>
    </header>

    <!-- Filters Container -->
    <div class="max-w-container-max mx-auto px-margin-mobile md:px-margin-desktop mb-8 md:mb-gutter sticky top-[68px] md:top-[80px] z-40 bg-background/95 backdrop-blur-sm py-3 md:py-4">
        <div class="overflow-x-auto -mx-margin-mobile px-margin-mobile md:mx-0 md:px-0">
            <ul class="flex gap-5 md:gap-8 border-b border-outline-variant/50 pb-2 min-w-max md:min-w-0 md:flex-wrap">
                <li>
                    <a href="{{ route('projects') }}" class="font-label-lg text-label-lg whitespace-nowrap {{ !$category ? 'text-primary border-b-2 border-primary' : 'text-secondary hover:text-primary' }} pb-2 px-1 transition-all">{{ __('projects.all') }}</a>
                </li>
                <li>
                    <a href="{{ route('projects', ['category' => 'Residential']) }}" class="font-label-lg text-label-lg whitespace-nowrap {{ $category === 'Residential' ? 'text-primary border-b-2 border-primary' : 'text-secondary hover:text-primary' }} pb-2 px-1 transition-all">{{ __('projects.residential') }}</a>
                </li>
                <li>
                    <a href="{{ route('projects', ['category' => 'Commercial']) }}" class="font-label-lg text-label-lg whitespace-nowrap {{ $category === 'Commercial' ? 'text-primary border-b-2 border-primary' : 'text-secondary hover:text-primary' }} pb-2 px-1 transition-all">{{ __('projects.commercial') }}</a>
                </li>
                <li>
                    <a href="{{ route('projects', ['category' => 'Office']) }}" class="font-label-lg text-label-lg whitespace-nowrap {{ $category === 'Office' ? 'text-primary border-b-2 border-primary' : 'text-secondary hover:text-primary' }} pb-2 px-1 transition-all">{{ __('projects.office') }}</a>
                </li>
                <li>
                    <a href="{{ route('projects', ['category' => 'Hospitality']) }}" class="font-label-lg text-label-lg whitespace-nowrap {{ $category === 'Hospitality' ? 'text-primary border-b-2 border-primary' : 'text-secondary hover:text-primary' }} pb-2 px-1 transition-all">{{ __('projects.hospitality') }}</a>
                </li>
            </ul>
        </div>
    </div>

    <!-- Featured Project -->
    @if($featuredProject)
    <section class="max-w-container-max mx-auto px-margin-mobile md:px-margin-desktop mb-12 md:mb-section-gap">
        <a href="{{ route('projects.detail', ['slug' => $featuredProject->slug]) }}" class="block">
            <div class="grid grid-cols-1 md:grid-cols-12 gap-6 md:gap-gutter items-start md:items-center relative group cursor-pointer">
                <!-- Image Column -->
                <div class="md:col-span-8 rounded-card overflow-hidden shadow-level-1 relative h-[260px] sm:h-[380px] md:h-[600px] w-full">
                    <img alt="{{ $featuredProject->title }}" class="absolute inset-0 w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-700 ease-in-out" src="{{ $featuredProject->featured_image_url }}">
                </div>
                <!-- Content Card -->
                <div class="md:col-span-5 md:-ml-24 md:mt-24 z-10 bg-surface-container-lowest p-6 md:p-10 rounded-card shadow-level-2 transform group-hover:-translate-y-2 transition-transform duration-500 border border-surface-variant/50">
                    <div class="flex items-center gap-3 mb-4 md:mb-6">
                        <span class="h-px w-8 bg-tertiary-fixed-dim"></span>
                        <span class="font-label-md text-label-md text-tertiary-fixed-dim uppercase tracking-widest">{{ __('projects.featured') }}</span>
                    </div>
                    <h2 class="font-headline-lg text-[24px] md:text-headline-lg text-primary mb-3 md:mb-4 leading-tight">{{ $featuredProject->title }}</h2>
                    <p class="font-body-md text-body-md text-secondary mb-6 md:mb-8 leading-relaxed line-clamp-3 md:line-clamp-none">{{ $featuredProject->short_description }}</p>
                    <div class="flex flex-wrap gap-4 md:gap-8 border-t border-outline-variant/30 pt-4 md:pt-6">
                        <div>
                            <p class="font-label-md text-label-md text-secondary mb-1">{{ __('projects.location') }}</p>
                            <p class="font-body-md text-body-md text-primary font-medium">{{ $featuredProject->location }}</p>
                        </div>
                        <div>
                            <p class="font-label-md text-label-md text-secondary mb-1">{{ __('projects.year') }}</p>
                            <p class="font-body-md text-body-md text-primary font-medium">{{ $featuredProject->year }}</p>
                        </div>
                        <div>
                            <p class="font-label-md text-label-md text-secondary mb-1">{{ __('projects.scale') }}</p>
                            <p class="font-body-md text-body-md text-primary font-medium">{{ $featuredProject->scale }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </a>
    </section>
    @endif

    <!-- Masonry Grid Gallery -->
    <section class="max-w-container-max mx-auto px-margin-mobile md:px-margin-desktop">
        <div class="columns-1 sm:columns-2 lg:columns-3 gap-5 md:gap-gutter space-y-5 md:space-y-gutter">
            @foreach($projects as $project)
            @if($project->id !== $featuredProject?->id)
            <article class="break-inside-avoid bg-surface-container-lowest rounded-card overflow-hidden shadow-level-1 hover:shadow-level-2 transition-shadow duration-300 group cursor-pointer border border-surface-variant/30">
                <a href="{{ route('projects.detail', ['slug' => $project->slug]) }}">
                    <div class="relative overflow-hidden aspect-[4/5]">
                        <img alt="{{ $project->title }}" class="w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-700" src="{{ $project->featured_image_url }}">
                    </div>
                    <div class="p-5 md:p-6">
                        <h3 class="font-headline-sm text-[20px] md:text-headline-sm text-primary mb-2">{{ $project->title }}</h3>
                        <div class="flex flex-wrap items-center gap-2 font-label-md text-label-md text-secondary">
                            <span>{{ $project->category }}</span>
                            <span class="w-1 h-1 rounded-full bg-outline-variant"></span>
                            <span>{{ $project->location }}</span>
                            <span class="w-1 h-1 rounded-full bg-outline-variant"></span>
                            <span>{{ $project->year }}</span>
                        </div>
                    </div>
                </a>
            </article>
            @endif
            @endforeach
        </div>
        <div class="mt-12 md:mt-16 text-center">
            <button class="font-label-lg text-label-lg text-primary border border-primary px-8 py-4 rounded-button hover:bg-primary hover:text-on-primary transition-colors duration-300 w-full sm:w-auto">
                {{ __('projects.load_more') }}
            </button>
        </div>
    </section>
</main>
@endsection
