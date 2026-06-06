@extends('layouts.app')

@section('title', 'Cahaya Interior Sejahtera - Jasa Interior Rumah & Kantor Premium')
@section('meta_description', 'Pioneering spatial transformations with architectural precision and bespoke craftsmanship. We transform premium properties into timeless sanctuaries of sophistication.')

@section('content')
<main>
    <!-- Hero Section -->
    <section class="relative h-screen min-h-[600px] flex items-center justify-center pt-24 overflow-hidden">
        <div class="absolute inset-0 z-0">
            <img alt="Luxury interior design living room" class="w-full h-full object-cover object-center" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCceW8YxXtWfExXMy7n8KiiVYo63gheuw8OmRvzw8tMbXKLqaw5chUZdCk5iKMrZz3OkYY2ZknYkhZxYEbNG50-j2MTJc2Nz2dSwqINPC-wqaGtgMWNM3mYm-LQ8jvl59w5k_Goh384C5eEzst4wguRPqoYy6C2RrqaryFkfR9Lk_VH5aUvN7ZAVdjMUn8XrCuTYyeX4IlQtjLI2jjZk3-66OJonstDA_OAbE3ai5oXvWDFmNoiCgP98U5ZPBDfP1HHGAnr-yJtnz1E">
            <div class="absolute inset-0 bg-black/20"></div>
        </div>
        <div class="relative z-10 w-full max-w-container-max mx-auto px-margin-mobile md:px-margin-desktop text-center">
            <h1 class="font-headline-xl text-headline-xl text-white mb-6 max-w-4xl mx-auto drop-shadow-md">
                Defining Spaces, Elevating Lifestyles
            </h1>
            <p class="font-body-lg text-body-lg text-white/90 mb-10 max-w-2xl mx-auto">
                Mastering the art of high-end interior architecture. We transform premium properties into timeless sanctuaries of sophistication.
            </p>
            <div class="flex gap-4 justify-center">
                <a href="{{ route('projects') }}" class="px-8 py-3 bg-white text-primary rounded font-label-lg text-label-lg hover:bg-surface-variant transition-colors shadow-[0px_12px_40px_rgba(0,0,0,0.08)]">
                    Explore Portfolio
                </a>
            </div>
        </div>
    </section>

    <!-- Introduction Section -->
    <section class="py-section-gap px-margin-mobile md:px-margin-desktop max-w-container-max mx-auto">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-gutter items-center">
            <div class="pr-0 lg:pr-12">
                <h2 class="font-headline-lg text-headline-lg-mobile md:text-headline-lg text-primary mb-8 leading-tight">
                    A decade of creating architectural masterpieces.
                </h2>
                <p class="font-body-md text-body-md text-on-surface-variant mb-6 leading-relaxed">
                    At Cahaya Interior Sejahtera, we believe that true luxury lies in the details. Our approach blends rigorous architectural principles with exquisite materiality, resulting in spaces that are both deeply functional and profoundly beautiful.
                </p>
                <p class="font-body-md text-body-md text-on-surface-variant mb-10 leading-relaxed">
                    From conceptual blueprint to final styling, we meticulously curate every element to reflect the unique aspirations of our discerning clientele.
                </p>
                <a class="inline-flex items-center gap-2 font-label-lg text-label-lg text-primary border-b border-primary pb-1 hover:opacity-70 transition-opacity" href="{{ route('about') }}">
                    Discover Our Story <span class="material-symbols-outlined text-[18px]">arrow_forward</span>
                </a>
            </div>
            <div class="relative h-[500px] rounded-2xl overflow-hidden shadow-[0px_12px_40px_rgba(0,0,0,0.08)]">
                <img alt="Elegant minimalist bedroom design" class="w-full h-full object-cover" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBGBq6rdZIbBuvDa7356hkANUxp7KkEfm7JUVA1-yqLNzPZItXeku9n6jvDyuv2VjqOCNFi4CnfFwMVewqckpHlWk-jnI4VvLDsjrLF0ei9iOtaikAnmee1ggQH7LKuSk663--_IVIglU57NtkK9nsxlkVQzXXfcH4sdR8gl5oXsDV_unMCxAOVQxgTvCFNRWrDq7jEDWkJeWdYi33LQCY_MGpY48Se4stH6O4N3NgZ_Gjc-LUCOlWpWnFiX9XNEgFd5C2Rsta4lCsU">
            </div>
        </div>
    </section>

    <!-- Why Choose Us -->
    <section class="py-section-gap bg-surface-container-low px-margin-mobile md:px-margin-desktop">
        <div class="max-w-container-max mx-auto">
            <div class="text-center mb-16">
                <h2 class="font-headline-md text-headline-md text-primary mb-4">The Pillars of Our Practice</h2>
                <p class="font-body-md text-body-md text-secondary max-w-2xl mx-auto">Foundational principles that guide every project we undertake.</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-gutter">
                <!-- Feature 1 -->
                <div class="bg-surface-container-lowest p-8 rounded-xl shadow-[0px_4px_20px_rgba(0,0,0,0.04)] hover:shadow-[0px_12px_40px_rgba(0,0,0,0.08)] transition-shadow duration-300">
                    <div class="w-12 h-12 mb-6 flex items-center justify-center text-primary border border-outline-variant rounded-full">
                        <span class="material-symbols-outlined text-[24px]">architecture</span>
                    </div>
                    <h3 class="font-headline-sm text-headline-sm text-primary mb-3">Design Excellence</h3>
                    <p class="font-body-sm text-body-sm text-on-surface-variant leading-relaxed">
                        Rigorous adherence to proportion, light, and spatial flow, ensuring every environment is a masterpiece of modern design.
                    </p>
                </div>
                <!-- Feature 2 -->
                <div class="bg-surface-container-lowest p-8 rounded-xl shadow-[0px_4px_20px_rgba(0,0,0,0.04)] hover:shadow-[0px_12px_40px_rgba(0,0,0,0.08)] transition-shadow duration-300">
                    <div class="w-12 h-12 mb-6 flex items-center justify-center text-primary border border-outline-variant rounded-full">
                        <span class="material-symbols-outlined text-[24px]">handyman</span>
                    </div>
                    <h3 class="font-headline-sm text-headline-sm text-primary mb-3">Master Craftsmanship</h3>
                    <p class="font-body-sm text-body-sm text-on-surface-variant leading-relaxed">
                        Collaborating only with elite artisans to source and shape the finest materials, from bespoke millwork to rare stone.
                    </p>
                </div>
                <!-- Feature 3 -->
                <div class="bg-surface-container-lowest p-8 rounded-xl shadow-[0px_4px_20px_rgba(0,0,0,0.04)] hover:shadow-[0px_12px_40px_rgba(0,0,0,0.08)] transition-shadow duration-300">
                    <div class="w-12 h-12 mb-6 flex items-center justify-center text-primary border border-outline-variant rounded-full">
                        <span class="material-symbols-outlined text-[24px]">verified</span>
                    </div>
                    <h3 class="font-headline-sm text-headline-sm text-primary mb-3">Unwavering Reliability</h3>
                    <p class="font-body-sm text-body-sm text-on-surface-variant leading-relaxed">
                        A commitment to absolute precision in project management, delivering complex residential builds on time and to the highest standard.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Selected Works Showcase -->
    <section class="py-section-gap px-margin-mobile md:px-margin-desktop max-w-container-max mx-auto">
        <div class="flex justify-between items-end mb-12">
            <div>
                <h2 class="font-headline-md text-headline-md text-primary mb-2">Selected Works</h2>
                <p class="font-body-md text-body-md text-secondary">A curated glimpse into our portfolio.</p>
            </div>
            <a class="inline-flex items-center gap-2 font-label-lg text-label-lg text-primary hover:opacity-70 transition-opacity" href="{{ route('projects') }}">
                View All Projects <span class="material-symbols-outlined text-[18px]">arrow_forward</span>
            </a>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-gutter">
            @foreach ($featuredProjects as $index => $project)
            <div class="group cursor-pointer {{ $index % 2 === 1 ? 'md:mt-16' : '' }}" onclick="window.location.href='{{ route('projects.detail', $project->slug) }}'">
                <div class="relative h-[300px] md:h-[400px] overflow-hidden rounded-[16px] mb-4 bg-surface-variant">
                    <img alt="{{ $project->title }}" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105" src="{{ $project->featured_image }}">
                </div>
                <h3 class="font-headline-sm text-headline-sm text-primary">{{ $project->title }}</h3>
                <p class="font-body-sm text-body-sm text-secondary mt-1">{{ $project->location }} • {{ $project->category }}</p>
            </div>
            @endforeach
        </div>
    </section>

    <!-- Stats Section -->
    <section class="py-24 border-y border-outline-variant/30 bg-surface px-margin-mobile md:px-margin-desktop">
        <div class="max-w-container-max mx-auto grid grid-cols-1 md:grid-cols-3 gap-12 text-center divide-y md:divide-y-0 md:divide-x divide-outline-variant/30">
            <div class="py-4">
                <div class="font-headline-xl text-headline-xl text-primary mb-2">150+</div>
                <div class="font-label-md text-label-md text-secondary uppercase tracking-wider">Projects Completed</div>
            </div>
            <div class="py-4">
                <div class="font-headline-xl text-headline-xl text-primary mb-2">120+</div>
                <div class="font-label-md text-label-md text-secondary uppercase tracking-wider">Happy Clients</div>
            </div>
            <div class="py-4">
                <div class="font-headline-xl text-headline-xl text-primary mb-2">10</div>
                <div class="font-label-md text-label-md text-secondary uppercase tracking-wider">Years Experience</div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-section-gap px-margin-mobile md:px-margin-desktop text-center max-w-3xl mx-auto">
        <h2 class="font-headline-lg text-headline-lg-mobile md:text-headline-lg text-primary mb-6">Ready to elevate your space?</h2>
        <p class="font-body-lg text-body-lg text-secondary mb-10">
            Schedule a private consultation with our principal designers to discuss your vision.
        </p>
        <a href="{{ route('contact') }}" class="inline-block px-10 py-4 bg-primary text-on-primary rounded-lg font-label-lg text-label-lg hover:bg-inverse-surface transition-colors shadow-[0px_4px_20px_rgba(0,0,0,0.04)]">
            Start Your Dream Project Today
        </a>
    </section>
</main>
@endsection
