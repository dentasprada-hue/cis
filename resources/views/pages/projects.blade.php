@extends('layouts.app')

@section('title', 'Projects - Cahaya Interior Sejahtera')
@section('meta_description', 'Explore our portfolio of premium interior spaces and architectural achievements. Each project represents a synthesis of rigorous design methodology and masterful execution.')

@section('content')
<main class="pt-[140px] pb-section-gap">
    <!-- Hero Header -->
    <header class="max-w-container-max mx-auto px-margin-desktop mb-section-gap">
        <h1 class="font-headline-xl text-headline-xl text-primary mb-6 max-w-3xl">Selected Works & Architectural Explorations</h1>
        <p class="font-body-lg text-body-lg text-secondary max-w-2xl">Discover our portfolio of premium interior spaces and structural achievements. Each project represents a synthesis of rigorous design methodology and masterful execution.</p>
    </header>

    <!-- Filters Container -->
    <div class="max-w-container-max mx-auto px-margin-desktop mb-gutter sticky top-[90px] z-40 bg-background/95 backdrop-blur-sm py-4">
        <ul class="flex flex-wrap gap-8 border-b border-outline-variant/50 pb-2">
            <li>
                <a href="{{ route('projects') }}" class="font-label-lg text-label-lg {{ !$category ? 'text-primary border-b border-primary' : 'text-secondary hover:text-primary' }} border-b pb-2 px-1 transition-all">All Projects</a>
            </li>
            <li>
                <a href="{{ route('projects', ['category' => 'Residential']) }}" class="font-label-lg text-label-lg {{ $category === 'Residential' ? 'text-primary border-b border-primary' : 'text-secondary hover:text-primary' }} border-b pb-2 px-1 transition-all">Residential</a>
            </li>
            <li>
                <a href="{{ route('projects', ['category' => 'Commercial']) }}" class="font-label-lg text-label-lg {{ $category === 'Commercial' ? 'text-primary border-b border-primary' : 'text-secondary hover:text-primary' }} border-b pb-2 px-1 transition-all">Commercial</a>
            </li>
            <li>
                <a href="{{ route('projects', ['category' => 'Office']) }}" class="font-label-lg text-label-lg {{ $category === 'Office' ? 'text-primary border-b border-primary' : 'text-secondary hover:text-primary' }} border-b pb-2 px-1 transition-all">Office</a>
            </li>
            <li>
                <a href="{{ route('projects', ['category' => 'Hospitality']) }}" class="font-label-lg text-label-lg {{ $category === 'Hospitality' ? 'text-primary border-b border-primary' : 'text-secondary hover:text-primary' }} border-b pb-2 px-1 transition-all">Hospitality</a>
            </li>
        </ul>
    </div>

    <!-- Featured Project (Asymmetric Layout) -->
    @if($featuredProject)
    <section class="max-w-container-max mx-auto px-margin-desktop mb-section-gap">
        <div class="grid grid-cols-1 md:grid-cols-12 gap-gutter items-center relative group cursor-pointer">
            <!-- Image Column -->
            <div class="md:col-span-8 rounded-card overflow-hidden shadow-level-1 relative h-[600px] w-full">
                <img alt="{{ $featuredProject->title }}" class="absolute inset-0 w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-700 ease-in-out" src="{{ $featuredProject->featured_image }}">
            </div>
            <!-- Overlapping Content Card -->
            <div class="md:col-span-5 md:-ml-24 md:mt-24 z-10 bg-surface-container-lowest p-10 rounded-card shadow-level-2 transform group-hover:-translate-y-2 transition-transform duration-500 border border-surface-variant/50">
                <div class="flex items-center gap-3 mb-6">
                    <span class="h-px w-8 bg-tertiary-fixed-dim"></span>
                    <span class="font-label-md text-label-md text-tertiary-fixed-dim uppercase tracking-widest">Featured Project</span>
                </div>
                <h2 class="font-headline-lg text-headline-lg text-primary mb-4">{{ $featuredProject->title }}</h2>
                <p class="font-body-md text-body-md text-secondary mb-8 leading-relaxed">{{ $featuredProject->short_description }}</p>
                <div class="flex gap-8 border-t border-outline-variant/30 pt-6">
                    <div>
                        <p class="font-label-md text-label-md text-secondary mb-1">Location</p>
                        <p class="font-body-md text-body-md text-primary font-medium">{{ $featuredProject->location }}</p>
                    </div>
                    <div>
                        <p class="font-label-md text-label-md text-secondary mb-1">Year</p>
                        <p class="font-body-md text-body-md text-primary font-medium">{{ $featuredProject->year }}</p>
                    </div>
                    <div>
                        <p class="font-label-md text-label-md text-secondary mb-1">Scale</p>
                        <p class="font-body-md text-body-md text-primary font-medium">{{ $featuredProject->scale }}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endif

    <!-- Masonry Grid Gallery -->
    <section class="max-w-container-max mx-auto px-margin-desktop">
        <div class="columns-1 md:columns-2 lg:columns-3 gap-gutter space-y-gutter">
            @foreach($projects as $project)
            @if($project->id !== $featuredProject?->id)
            <article class="break-inside-avoid bg-surface-container-lowest rounded-card overflow-hidden shadow-level-1 hover:shadow-level-2 transition-shadow duration-300 group cursor-pointer border border-surface-variant/30">
                <a href="{{ route('projects.detail', ['slug' => $project->slug]) }}">
                    <div class="relative overflow-hidden aspect-[4/5]">
                        <img alt="{{ $project->title }}" class="w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-700" src="{{ $project->featured_image }}">
                    </div>
                    <div class="p-6">
                        <h3 class="font-headline-sm text-headline-sm text-primary mb-2">{{ $project->title }}</h3>
                        <div class="flex items-center gap-3 font-label-md text-label-md text-secondary">
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
        <div class="mt-16 text-center">
            <button class="font-label-lg text-label-lg text-primary border border-primary px-8 py-4 rounded-button hover:bg-primary hover:text-on-primary transition-colors duration-300">
                Load More Projects
            </button>
        </div>
    </section>
</main>
@endsection
