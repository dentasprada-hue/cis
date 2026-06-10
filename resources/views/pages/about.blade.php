@extends('layouts.app')

@section('title', __('about.title') . ' | Cahaya Interior Sejahtera')
@section('meta_description', __('about.description'))

@section('content')
<main class="pt-2 md:pt-4">
    <!-- Hero Section -->
    <section class="py-12 md:py-section-gap px-margin-mobile md:px-margin-desktop max-w-container-max mx-auto">
        <div class="grid grid-cols-1 md:grid-cols-12 gap-8 md:gap-gutter items-center">
            <div class="md:col-span-5 space-y-5 md:space-y-6">
                <h1 class="font-headline-lg text-[28px] sm:text-[36px] md:text-headline-xl text-primary leading-tight">
                    {{ __('about.title') }}
                </h1>
                <p class="font-body-lg text-body-lg text-secondary">
                    {{ __('about.description') }}
                </p>
            </div>
            <div class="md:col-span-7 h-[260px] sm:h-[380px] md:h-[500px] lg:h-[700px] relative rounded-xl overflow-hidden shadow-level-1">
                <img alt="Desain interior minimalis premium oleh Cahaya Interior Sejahtera" class="w-full h-full object-cover" src="{{ asset('images/3.png') }}">
            </div>
        </div>
    </section>

    <!-- Komitmen Kami -->
    <section class="py-12 md:py-section-gap bg-surface-container-lowest">
        <div class="px-margin-mobile md:px-margin-desktop max-w-container-max mx-auto">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 md:gap-[80px] lg:gap-[120px] items-center">
                <div class="order-2 md:order-1 h-[240px] sm:h-[360px] md:h-[500px] lg:h-[600px] rounded-xl overflow-hidden shadow-level-1">
                    <img alt="Material interior premium pilihan Cahaya Interior Sejahtera" class="w-full h-full object-cover" src="{{ asset('images/4.png') }}">
                </div>
                <div class="order-1 md:order-2 space-y-5 md:space-y-8">
                    <div class="w-12 h-1 bg-primary"></div>
                    <h2 class="font-headline-lg text-[26px] sm:text-[34px] md:text-headline-lg text-primary leading-tight">
                        {{ __('about.commitment_title') }}
                    </h2>
                    <div class="font-body-lg text-body-lg text-secondary">
                        <p>{{ __('about.commitment') }}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Vision & Mission -->
    <section class="py-12 md:py-section-gap px-margin-mobile md:px-margin-desktop max-w-container-max mx-auto">
        <div class="text-center mb-10 md:mb-16 space-y-3 md:space-y-4">
            <h2 class="font-headline-lg text-[26px] sm:text-[34px] md:text-headline-lg text-primary leading-tight">{{ __('about.vision_title') }} & {{ __('about.mission_title') }}</h2>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 md:gap-gutter">
            <div class="bg-surface-container-lowest p-8 md:p-12 rounded-xl shadow-level-1 border border-outline-variant/20 hover:shadow-lg transition-shadow duration-300">
                <span class="material-symbols-outlined text-4xl text-primary mb-5 md:mb-6 block">visibility</span>
                <h3 class="font-headline-md text-[22px] md:text-headline-md text-primary mb-3 md:mb-4">{{ __('about.vision_title') }}</h3>
                <p class="font-body-md text-body-md text-secondary leading-relaxed">{{ __('about.vision') }}</p>
            </div>
            <div class="bg-surface-container-lowest p-8 md:p-12 rounded-xl shadow-level-1 border border-outline-variant/20 hover:shadow-lg transition-shadow duration-300">
                <span class="material-symbols-outlined text-4xl text-primary mb-5 md:mb-6 block">flag</span>
                <h3 class="font-headline-md text-[22px] md:text-headline-md text-primary mb-3 md:mb-4">{{ __('about.mission_title') }}</h3>
                <ul class="font-body-md text-body-md text-secondary leading-relaxed space-y-2">
                    <li>• {{ __('about.mission_1') }}</li>
                    <li>• {{ __('about.mission_2') }}</li>
                    <li>• {{ __('about.mission_3') }}</li>
                    <li>• {{ __('about.mission_4') }}</li>
                </ul>
            </div>
        </div>
    </section>

    <!-- Layanan Kami -->
    <section class="py-12 md:py-section-gap bg-surface-container-lowest border-y border-outline-variant/20">
        <div class="px-margin-mobile md:px-margin-desktop max-w-container-max mx-auto">
            <!-- Banner foto ke-5 -->
            <div class="w-full h-48 sm:h-64 md:h-80 rounded-2xl overflow-hidden shadow-level-1 mb-12 md:mb-20">
                <img alt="Proyek interior kantor modern oleh Cahaya Interior Sejahtera"
                     class="w-full h-full object-cover object-center"
                     src="{{ asset('images/5.png') }}">
            </div>
            <h2 class="font-headline-lg text-[26px] sm:text-[34px] md:text-headline-lg text-primary text-center mb-10 md:mb-16 leading-tight">{{ __('about.services_title') }}</h2>
            <div class="grid grid-cols-2 md:grid-cols-3 gap-6 md:gap-gutter">
                <div class="text-center space-y-4 md:space-y-6">
                    <div class="w-16 h-16 md:w-20 md:h-20 mx-auto rounded-full bg-surface flex items-center justify-center shadow-level-1">
                        <span class="material-symbols-outlined text-2xl md:text-3xl text-primary">home</span>
                    </div>
                    <h4 class="font-headline-sm text-[18px] md:text-headline-sm text-primary">{{ __('about.service_1') }}</h4>
                </div>
                <div class="text-center space-y-4 md:space-y-6">
                    <div class="w-16 h-16 md:w-20 md:h-20 mx-auto rounded-full bg-surface flex items-center justify-center shadow-level-1">
                        <span class="material-symbols-outlined text-2xl md:text-3xl text-primary">business</span>
                    </div>
                    <h4 class="font-headline-sm text-[18px] md:text-headline-sm text-primary">{{ __('about.service_2') }}</h4>
                </div>
                <div class="text-center space-y-4 md:space-y-6">
                    <div class="w-16 h-16 md:w-20 md:h-20 mx-auto rounded-full bg-surface flex items-center justify-center shadow-level-1">
                        <span class="material-symbols-outlined text-2xl md:text-3xl text-primary">chair</span>
                    </div>
                    <h4 class="font-headline-sm text-[18px] md:text-headline-sm text-primary">{{ __('about.service_3') }}</h4>
                </div>
                <div class="text-center space-y-4 md:space-y-6">
                    <div class="w-16 h-16 md:w-20 md:h-20 mx-auto rounded-full bg-surface flex items-center justify-center shadow-level-1">
                        <span class="material-symbols-outlined text-2xl md:text-3xl text-primary">kitchen</span>
                    </div>
                    <h4 class="font-headline-sm text-[18px] md:text-headline-sm text-primary">{{ __('about.service_4') }}</h4>
                </div>
                <div class="text-center space-y-4 md:space-y-6">
                    <div class="w-16 h-16 md:w-20 md:h-20 mx-auto rounded-full bg-surface flex items-center justify-center shadow-level-1">
                        <span class="material-symbols-outlined text-2xl md:text-3xl text-primary">grid_view</span>
                    </div>
                    <h4 class="font-headline-sm text-[18px] md:text-headline-sm text-primary">{{ __('about.service_5') }}</h4>
                </div>
                <div class="text-center space-y-4 md:space-y-6">
                    <div class="w-16 h-16 md:w-20 md:h-20 mx-auto rounded-full bg-surface flex items-center justify-center shadow-level-1">
                        <span class="material-symbols-outlined text-2xl md:text-3xl text-primary">construction</span>
                    </div>
                    <h4 class="font-headline-sm text-[18px] md:text-headline-sm text-primary">{{ __('about.service_6') }}</h4>
                </div>
            </div>
        </div>
    </section>

    <!-- Statistics -->
    <section class="py-12 md:py-section-gap bg-surface border-t border-outline-variant/20">
        <div class="px-margin-mobile md:px-margin-desktop max-w-container-max mx-auto">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-6 md:gap-gutter text-center">
                <div class="py-6 md:py-0 px-2 md:px-4 border-b md:border-b-0 md:border-r border-outline-variant/30">
                    <div class="font-headline-xl text-[36px] md:text-headline-xl text-primary mb-1 md:mb-2">150+</div>
                    <div class="font-label-lg text-[12px] md:text-label-lg text-secondary">{{ __('about.stats_projects') }}</div>
                </div>
                <div class="py-6 md:py-0 px-2 md:px-4 border-b md:border-b-0 md:border-r border-outline-variant/30">
                    <div class="font-headline-xl text-[36px] md:text-headline-xl text-primary mb-1 md:mb-2">120+</div>
                    <div class="font-label-lg text-[12px] md:text-label-lg text-secondary">{{ __('about.stats_satisfaction') }}</div>
                </div>
                <div class="py-6 md:py-0 px-2 md:px-4 md:border-r border-outline-variant/30">
                    <div class="font-headline-xl text-[36px] md:text-headline-xl text-primary mb-1 md:mb-2">15</div>
                    <div class="font-label-lg text-[12px] md:text-label-lg text-secondary">{{ __('about.stats_team') }}</div>
                </div>
                <div class="py-6 md:py-0 px-2 md:px-4">
                    <div class="font-headline-xl text-[36px] md:text-headline-xl text-primary mb-1 md:mb-2">100%</div>
                    <div class="font-label-lg text-[12px] md:text-label-lg text-secondary">{{ __('about.stats_quality') }}</div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection
