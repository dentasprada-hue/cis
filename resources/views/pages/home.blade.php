@extends('layouts.app')

@section('title', 'Cahaya Interior Sejahtera - Jasa Desain Interior Rumah & Kantor Premium')
@section('meta_description', 'Cahaya Interior Sejahtera menghadirkan layanan desain dan pengerjaan interior berkualitas untuk rumah, kantor, dan ruang komersial. Interior Rumah, Interior Kantor, Furniture Custom, Kitchen Set, dan Renovasi Interior.')

@section('content')
<main class="overflow-x-hidden w-full">

    <!-- HERO -->
    <section class="relative w-full min-h-[100svh] flex items-center justify-center overflow-hidden">
        <div class="absolute inset-0 z-0">
            <img alt="Desain interior rumah minimalis modern oleh Cahaya Interior Sejahtera"
                 class="w-full h-full object-cover object-center"
                 src="{{ asset('images/5.png') }}">
            <div class="absolute inset-0 bg-black/40"></div>
        </div>
        <div class="relative z-10 w-full px-5 sm:px-8 md:px-16 text-center pt-28 pb-16 md:py-24">
            <div class="max-w-3xl mx-auto">
                <h1 class="text-white drop-shadow-lg mb-5 md:mb-6 leading-tight font-bold
                            text-[28px] sm:text-[36px] md:text-[48px] lg:text-[56px]">
                    {{ __('home.hero_title') }}
                </h1>
                <p class="text-white/90 leading-relaxed mb-8 md:mb-10 max-w-xl mx-auto
                           text-sm sm:text-base md:text-lg font-light">
                    {{ __('home.hero_subtitle') }}
                </p>
                <div class="flex flex-col sm:flex-row gap-3 justify-center items-center">
                    <a href="https://wa.me/6285776755884" target="_blank" rel="noopener noreferrer"
                       class="w-full sm:w-auto px-8 py-3 bg-white text-black rounded font-medium text-sm tracking-wide
                              hover:bg-gray-100 transition-colors shadow-lg text-center">
                        {{ __('home.hero_cta_primary') }}
                    </a>
                    <a href="{{ route('projects') }}"
                       class="w-full sm:w-auto px-8 py-3 bg-transparent text-white border border-white/70 rounded
                              font-medium text-sm tracking-wide hover:bg-white/10 transition-colors text-center">
                        {{ __('home.hero_cta_secondary') }}
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- INTRO -->
    <section class="w-full py-14 md:py-24 px-5 sm:px-8 md:px-16">
        <div class="max-w-6xl mx-auto">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 lg:gap-16 items-center">
                <!-- Image first on mobile -->
                <div class="w-full h-64 sm:h-80 md:h-96 lg:h-[480px] rounded-2xl overflow-hidden shadow-xl lg:order-2">
                    <img alt="Hasil pengerjaan interior rumah minimalis oleh Cahaya Interior Sejahtera"
                         class="w-full h-full object-cover"
                         src="{{ asset('images/2.png') }}">
                </div>
                <!-- Text -->
                <div class="lg:order-1">
                    <h2 class="font-headline-lg text-primary leading-tight mb-5
                                text-2xl sm:text-3xl md:text-headline-lg">
                        {{ __('home.intro_title') }}
                    </h2>
                    <p class="font-body-md text-body-md text-on-surface-variant leading-relaxed mb-4">
                        {{ __('home.intro_p1') }}
                    </p>
                    <p class="font-body-md text-body-md text-on-surface-variant leading-relaxed mb-8">
                        {{ __('home.intro_p2') }}
                    </p>
                    <a href="{{ route('about') }}"
                       class="inline-flex items-center gap-2 font-label-lg text-label-lg text-primary
                              border-b border-primary pb-1 hover:opacity-70 transition-opacity">
                        {{ __('home.discover_story') }}
                        <span class="material-symbols-outlined text-[18px]">arrow_forward</span>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- WHY CHOOSE US -->
    <section class="w-full py-14 md:py-24 px-5 sm:px-8 md:px-16 bg-surface-container-low">
        <div class="max-w-6xl mx-auto">
            <div class="text-center mb-10 md:mb-14">
                <h2 class="font-headline-md text-primary leading-tight mb-3
                            text-2xl sm:text-3xl md:text-headline-md">
                    {{ __('contact.why_choose_us') }}
                </h2>
                <p class="font-body-md text-body-md text-secondary max-w-xl mx-auto">
                    {{ __('contact.why_choose_subtitle') }}
                </p>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-5 md:gap-8">
                <div class="bg-surface-container-lowest p-6 rounded-xl shadow-level-1 hover:shadow-level-2 transition-shadow duration-300">
                    <div class="w-11 h-11 mb-5 flex items-center justify-center text-premium-brass border border-outline-variant rounded-full">
                        <span class="material-symbols-outlined text-[22px]">workspace_premium</span>
                    </div>
                    <h3 class="font-headline-sm text-primary mb-2 text-lg md:text-headline-sm">{{ __('contact.quality_craftsmanship') }}</h3>
                    <p class="font-body-sm text-body-sm text-on-surface-variant leading-relaxed">{{ __('contact.quality_craftsmanship_desc') }}</p>
                </div>
                <div class="bg-surface-container-lowest p-6 rounded-xl shadow-level-1 hover:shadow-level-2 transition-shadow duration-300">
                    <div class="w-11 h-11 mb-5 flex items-center justify-center text-premium-brass border border-outline-variant rounded-full">
                        <span class="material-symbols-outlined text-[22px]">lightbulb</span>
                    </div>
                    <h3 class="font-headline-sm text-primary mb-2 text-lg md:text-headline-sm">{{ __('contact.free_consultation') }}</h3>
                    <p class="font-body-sm text-body-sm text-on-surface-variant leading-relaxed">{{ __('contact.free_consultation_desc') }}</p>
                </div>
                <div class="bg-surface-container-lowest p-6 rounded-xl shadow-level-1 hover:shadow-level-2 transition-shadow duration-300">
                    <div class="w-11 h-11 mb-5 flex items-center justify-center text-premium-brass border border-outline-variant rounded-full">
                        <span class="material-symbols-outlined text-[22px]">verified</span>
                    </div>
                    <h3 class="font-headline-sm text-primary mb-2 text-lg md:text-headline-sm">{{ __('contact.project_warranty') }}</h3>
                    <p class="font-body-sm text-body-sm text-on-surface-variant leading-relaxed">{{ __('contact.project_warranty_desc') }}</p>
                </div>
                <div class="bg-surface-container-lowest p-6 rounded-xl shadow-level-1 hover:shadow-level-2 transition-shadow duration-300">
                    <div class="w-11 h-11 mb-5 flex items-center justify-center text-premium-brass border border-outline-variant rounded-full">
                        <span class="material-symbols-outlined text-[22px]">dashboard</span>
                    </div>
                    <h3 class="font-headline-sm text-primary mb-2 text-lg md:text-headline-sm">{{ __('contact.functional_design') }}</h3>
                    <p class="font-body-sm text-body-sm text-on-surface-variant leading-relaxed">{{ __('contact.functional_design_desc') }}</p>
                </div>
                <div class="bg-surface-container-lowest p-6 rounded-xl shadow-level-1 hover:shadow-level-2 transition-shadow duration-300">
                    <div class="w-11 h-11 mb-5 flex items-center justify-center text-premium-brass border border-outline-variant rounded-full">
                        <span class="material-symbols-outlined text-[22px]">handshake</span>
                    </div>
                    <h3 class="font-headline-sm text-primary mb-2 text-lg md:text-headline-sm">{{ __('contact.professional_service') }}</h3>
                    <p class="font-body-sm text-body-sm text-on-surface-variant leading-relaxed">{{ __('contact.professional_service_desc') }}</p>
                </div>
                <div class="bg-surface-container-lowest p-6 rounded-xl shadow-level-1 hover:shadow-level-2 transition-shadow duration-300">
                    <div class="w-11 h-11 mb-5 flex items-center justify-center text-premium-brass border border-outline-variant rounded-full">
                        <span class="material-symbols-outlined text-[22px]">straighten</span>
                    </div>
                    <h3 class="font-headline-sm text-primary mb-2 text-lg md:text-headline-sm">{{ __('contact.free_survey') }}</h3>
                    <p class="font-body-sm text-body-sm text-on-surface-variant leading-relaxed">{{ __('contact.free_survey_desc') }}</p>
                </div>
            </div>
        </div>
    </section>

    <!-- WORKING PROCESS -->
    <section class="w-full py-14 md:py-24 px-5 sm:px-8 md:px-16 bg-surface-container-low">
        <div class="max-w-6xl mx-auto">
            <div class="text-center mb-10 md:mb-14">
                <h2 class="font-headline-md text-primary leading-tight mb-3
                            text-2xl sm:text-3xl md:text-headline-md">
                    {{ __('contact.process_title') }}
                </h2>
                <p class="font-body-md text-body-md text-secondary max-w-xl mx-auto">
                    {{ __('contact.process_subtitle') }}
                </p>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-5 md:gap-8">
                <div class="bg-surface-container-lowest p-6 rounded-xl shadow-level-1 hover:shadow-level-2 transition-shadow duration-300">
                    <div class="flex items-center gap-1 mb-4">
                        <span class="font-headline-sm text-headline-sm text-premium-brass leading-none">01</span>
                    </div>
                    <h3 class="font-headline-sm text-primary mb-2 text-lg md:text-headline-sm">{{ __('contact.process_1_title') }}</h3>
                    <p class="font-body-sm text-body-sm text-on-surface-variant leading-relaxed">{{ __('contact.process_1_desc') }}</p>
                </div>
                <div class="bg-surface-container-lowest p-6 rounded-xl shadow-level-1 hover:shadow-level-2 transition-shadow duration-300">
                    <div class="flex items-center gap-1 mb-4">
                        <span class="font-headline-sm text-headline-sm text-premium-brass leading-none">02</span>
                    </div>
                    <h3 class="font-headline-sm text-primary mb-2 text-lg md:text-headline-sm">{{ __('contact.process_2_title') }}</h3>
                    <p class="font-body-sm text-body-sm text-on-surface-variant leading-relaxed">{{ __('contact.process_2_desc') }}</p>
                </div>
                <div class="bg-surface-container-lowest p-6 rounded-xl shadow-level-1 hover:shadow-level-2 transition-shadow duration-300">
                    <div class="flex items-center gap-1 mb-4">
                        <span class="font-headline-sm text-headline-sm text-premium-brass leading-none">03</span>
                    </div>
                    <h3 class="font-headline-sm text-primary mb-2 text-lg md:text-headline-sm">{{ __('contact.process_3_title') }}</h3>
                    <p class="font-body-sm text-body-sm text-on-surface-variant leading-relaxed">{{ __('contact.process_3_desc') }}</p>
                </div>
                <div class="bg-surface-container-lowest p-6 rounded-xl shadow-level-1 hover:shadow-level-2 transition-shadow duration-300">
                    <div class="flex items-center gap-1 mb-4">
                        <span class="font-headline-sm text-headline-sm text-premium-brass leading-none">04</span>
                    </div>
                    <h3 class="font-headline-sm text-primary mb-2 text-lg md:text-headline-sm">{{ __('contact.process_4_title') }}</h3>
                    <p class="font-body-sm text-body-sm text-on-surface-variant leading-relaxed">{{ __('contact.process_4_desc') }}</p>
                </div>
                <div class="bg-surface-container-lowest p-6 rounded-xl shadow-level-1 hover:shadow-level-2 transition-shadow duration-300">
                    <div class="flex items-center gap-1 mb-4">
                        <span class="font-headline-sm text-headline-sm text-premium-brass leading-none">05</span>
                    </div>
                    <h3 class="font-headline-sm text-primary mb-2 text-lg md:text-headline-sm">{{ __('contact.process_5_title') }}</h3>
                    <p class="font-body-sm text-body-sm text-on-surface-variant leading-relaxed">{{ __('contact.process_5_desc') }}</p>
                </div>
                <div class="bg-surface-container-lowest p-6 rounded-xl shadow-level-1 hover:shadow-level-2 transition-shadow duration-300">
                    <div class="flex items-center gap-1 mb-4">
                        <span class="font-headline-sm text-headline-sm text-premium-brass leading-none">06</span>
                    </div>
                    <h3 class="font-headline-sm text-primary mb-2 text-lg md:text-headline-sm">{{ __('contact.process_6_title') }}</h3>
                    <p class="font-body-sm text-body-sm text-on-surface-variant leading-relaxed">{{ __('contact.process_6_desc') }}</p>
                </div>
            </div>
        </div>
    </section>

    <!-- SELECTED WORKS -->
    <section class="w-full py-14 md:py-24 px-5 sm:px-8 md:px-16">
        <div class="max-w-6xl mx-auto">
            <div class="flex flex-col sm:flex-row sm:justify-between sm:items-end gap-3 mb-8 md:mb-12">
                <div>
                    <h2 class="font-headline-md text-primary leading-tight mb-1
                                text-2xl sm:text-3xl md:text-headline-md">
                        {{ __('home.selected_works_title') }}
                    </h2>
                    <p class="font-body-md text-body-md text-secondary">{{ __('home.selected_works_subtitle') }}</p>
                </div>
                <a href="{{ route('projects') }}"
                   class="inline-flex items-center gap-1 font-label-lg text-label-lg text-primary
                          hover:opacity-70 transition-opacity shrink-0">
                    {{ __('home.view_all_projects') }}
                    <span class="material-symbols-outlined text-[18px]">arrow_forward</span>
                </a>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 md:gap-8">
                @foreach ($featuredProjects as $index => $project)
                <a href="{{ route('projects.detail', $project->slug) }}"
                   class="group block {{ $index % 2 === 1 ? 'sm:mt-10' : '' }}">
                    <div class="w-full h-56 sm:h-72 md:h-80 overflow-hidden rounded-2xl bg-surface-variant mb-4">
                        <img alt="{{ $project->title }}"
                             class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105"
                             src="{{ $project->featured_image_url }}">
                    </div>
                    <h3 class="font-headline-sm text-primary text-lg md:text-headline-sm">{{ $project->title }}</h3>
                    <p class="font-body-sm text-body-sm text-secondary mt-1">{{ $project->location }} · {{ $project->category }}</p>
                </a>
                @endforeach
            </div>
        </div>
    </section>

    <!-- STATS -->
    <section class="w-full py-12 md:py-20 px-5 sm:px-8 md:px-16 border-y border-outline-variant/30 bg-surface">
        <div class="max-w-6xl mx-auto">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-6 text-center">
                <div class="py-4">
                    <div class="font-headline-xl text-primary mb-1 text-4xl md:text-headline-xl">200+</div>
                    <div class="font-label-md text-label-md text-secondary uppercase tracking-wider">{{ __('home.stat_1_label') }}</div>
                </div>
                <div class="py-4">
                    <div class="font-headline-xl text-primary mb-1 text-4xl md:text-headline-xl">100%</div>
                    <div class="font-label-md text-label-md text-secondary uppercase tracking-wider">{{ __('home.stat_2_label') }}</div>
                </div>
                <div class="py-4">
                    <div class="font-headline-xl text-primary mb-1 text-4xl md:text-headline-xl">{{ __('home.stat_3_number') }}</div>
                    <div class="font-label-md text-label-md text-secondary uppercase tracking-wider">{{ __('home.stat_3_label') }}</div>
                </div>
                <div class="py-4">
                    <div class="font-headline-xl text-primary mb-1 text-4xl md:text-headline-xl">{{ __('home.stat_4_number') }}</div>
                    <div class="font-label-md text-label-md text-secondary uppercase tracking-wider">{{ __('home.stat_4_label') }}</div>
                </div>
            </div>
        </div>
    </section>

    <!-- SERVICES -->
    <section class="w-full py-14 md:py-24 px-5 sm:px-8 md:px-16 bg-surface-container-low">
        <div class="max-w-6xl mx-auto">
            <div class="text-center mb-10 md:mb-14">
                <h2 class="font-headline-md text-primary leading-tight mb-3
                            text-2xl sm:text-3xl md:text-headline-md">
                    {{ __('home.services_title') }}
                </h2>
                <p class="font-body-md text-body-md text-secondary max-w-xl mx-auto">
                    {{ __('home.services_subtitle') }}
                </p>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-5 md:gap-8">
                @foreach([
                    ['icon'=>'home',        'title'=>__('home.service_1_title'),'desc'=>__('home.service_1_desc')],
                    ['icon'=>'business',    'title'=>__('home.service_2_title'),'desc'=>__('home.service_2_desc')],
                    ['icon'=>'chair',       'title'=>__('home.service_3_title'),'desc'=>__('home.service_3_desc')],
                    ['icon'=>'kitchen',     'title'=>__('home.service_4_title'),'desc'=>__('home.service_4_desc')],
                    ['icon'=>'grid_view',   'title'=>__('home.service_5_title'),'desc'=>__('home.service_5_desc')],
                    ['icon'=>'construction','title'=>__('home.service_6_title'),'desc'=>__('home.service_6_desc')],
                ] as $service)
                <div class="bg-surface-container-lowest p-6 rounded-xl shadow-level-1 hover:shadow-level-2 transition-shadow duration-300">
                    <div class="w-11 h-11 mb-5 flex items-center justify-center text-primary border border-outline-variant rounded-full">
                        <span class="material-symbols-outlined text-[22px]">{{ $service['icon'] }}</span>
                    </div>
                    <h3 class="font-headline-sm text-primary mb-2 text-lg md:text-headline-sm">{{ $service['title'] }}</h3>
                    <p class="font-body-sm text-body-sm text-on-surface-variant leading-relaxed">{{ $service['desc'] }}</p>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- CTA -->
    <section class="w-full py-14 md:py-24 px-5 sm:px-8 md:px-16 text-center">
        <div class="max-w-2xl mx-auto">
            <h2 class="font-headline-lg text-primary leading-tight mb-4
                        text-2xl sm:text-3xl md:text-headline-lg">
                {{ __('home.cta_title') }}
            </h2>
            <p class="font-body-lg text-body-lg text-secondary leading-relaxed mb-8 md:mb-10">
                {{ __('home.cta_subtitle') }}
            </p>
            <div class="flex flex-col sm:flex-row gap-3 justify-center items-stretch sm:items-center">
                <a href="https://wa.me/6285776755884" target="_blank" rel="noopener noreferrer"
                   class="inline-flex items-center justify-center gap-2 px-8 py-4 bg-primary text-on-primary
                          rounded-lg font-label-lg text-label-lg hover:bg-inverse-surface transition-colors
                          shadow-level-1">
                    <span class="material-symbols-outlined text-[18px]">chat</span>
                    {{ __('home.cta_button_primary') }}
                </a>
                <a href="{{ route('projects') }}"
                   class="inline-flex items-center justify-center px-8 py-4 border border-primary text-primary
                          rounded-lg font-label-lg text-label-lg hover:bg-primary hover:text-on-primary
                          transition-colors">
                    {{ __('home.cta_button_secondary') }}
                </a>
            </div>
        </div>
    </section>

</main>

<!-- Floating WhatsApp Button -->
<div class="fixed bottom-4 right-4 z-50">
    <a href="https://wa.me/6285776755884" target="_blank" rel="noopener noreferrer"
       class="flex items-center justify-center w-14 h-14 bg-green-500 rounded-full shadow-lg
              hover:bg-green-600 transition-colors duration-300">
        <span class="material-symbols-outlined text-white text-3xl">chat</span>
    </a>
</div>
@endsection
