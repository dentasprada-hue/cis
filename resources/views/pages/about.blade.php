@extends('layouts.app')

@section('title', __('about.title') . ' | Cahaya Interior Sejahtera')
@section('meta_description', __('about.description'))

@section('content')
<main class="overflow-x-hidden w-full">

    <!-- HERO -->
    <section class="w-full py-10 md:py-20 px-5 sm:px-8 md:px-16">
        <div class="max-w-6xl mx-auto">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 md:gap-12 items-center">
                <!-- Text -->
                <div class="space-y-5 md:space-y-6">
                    <p class="text-xs sm:text-sm font-semibold tracking-[0.2em] uppercase text-secondary">
                        {{ __('about.hero_label') }}
                    </p>
                    <h1 class="font-bold leading-tight text-primary
                                text-[28px] sm:text-[36px] md:text-[44px] lg:text-[52px]">
                        {{ __('about.hero_heading') }}
                    </h1>
                    <p class="text-secondary leading-relaxed text-sm sm:text-base md:text-lg font-light">
                        {{ __('about.hero_description') }}
                    </p>
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-2 text-secondary text-sm">
                        <p>• {{ __('about.trust_projects') }}</p>
                        <p>• {{ __('about.trust_segments') }}</p>
                        <p>• {{ __('about.trust_service') }}</p>
                        <p>• {{ __('about.trust_since') }}</p>
                    </div>
                    <a href="{{ route('projects') }}"
                       class="inline-block px-7 py-3 bg-primary text-white text-sm font-semibold rounded-lg
                              hover:bg-gray-800 transition-colors shadow-md">
                        {{ __('about.hero_cta') }}
                    </a>
                </div>
                <!-- Image -->
                <div class="w-full rounded-xl overflow-hidden shadow-xl">
                    <img alt="Premium interior design project by Cahaya Interior Sejahtera"
                         class="w-full h-auto object-cover"
                         src="{{ asset('images/3.png') }}">
                </div>
            </div>
        </div>
    </section>

    <!-- KOMITMEN -->
    <section class="w-full py-12 md:py-20 px-5 sm:px-8 md:px-16 bg-white">
        <div class="max-w-6xl mx-auto">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 md:gap-16 items-center">
                <div class="h-64 sm:h-80 md:h-[480px] rounded-xl overflow-hidden shadow-xl order-2 md:order-1">
                    <img alt="Material interior premium pilihan Cahaya Interior Sejahtera"
                         class="w-full h-full object-cover"
                         src="{{ asset('images/4.png') }}">
                </div>
                <div class="space-y-5 order-1 md:order-2">
                    <div class="w-12 h-1 bg-primary"></div>
                    <h2 class="font-bold text-primary leading-tight
                                text-[24px] sm:text-[30px] md:text-[38px]">
                        {{ __('about.commitment_title') }}
                    </h2>
                    <p class="text-secondary leading-relaxed text-sm sm:text-base font-light">
                        {{ __('about.commitment') }}
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- VISI & MISI -->
    <section class="w-full py-12 md:py-20 px-5 sm:px-8 md:px-16">
        <div class="max-w-6xl mx-auto">
            <h2 class="font-bold text-primary text-center leading-tight mb-10 md:mb-14
                        text-[24px] sm:text-[30px] md:text-[38px]">
                {{ __('about.vision_title') }} & {{ __('about.mission_title') }}
            </h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 md:gap-8">
                <div class="bg-white p-7 md:p-10 rounded-xl shadow-sm border border-gray-100 hover:shadow-md transition-shadow">
                    <span class="material-symbols-outlined text-4xl text-primary mb-5 block">visibility</span>
                    <h3 class="font-bold text-primary mb-3 text-xl md:text-2xl">{{ __('about.vision_title') }}</h3>
                    <p class="text-secondary leading-relaxed text-sm sm:text-base font-light">{{ __('about.vision') }}</p>
                </div>
                <div class="bg-white p-7 md:p-10 rounded-xl shadow-sm border border-gray-100 hover:shadow-md transition-shadow">
                    <span class="material-symbols-outlined text-4xl text-primary mb-5 block">flag</span>
                    <h3 class="font-bold text-primary mb-3 text-xl md:text-2xl">{{ __('about.mission_title') }}</h3>
                    <ul class="text-secondary leading-relaxed text-sm sm:text-base font-light space-y-2">
                        <li>• {{ __('about.mission_1') }}</li>
                        <li>• {{ __('about.mission_2') }}</li>
                        <li>• {{ __('about.mission_3') }}</li>
                        <li>• {{ __('about.mission_4') }}</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- LAYANAN -->
    <section class="w-full py-12 md:py-20 px-5 sm:px-8 md:px-16 bg-gray-50">
        <div class="max-w-6xl mx-auto">
            <!-- Banner foto -->
            <div class="w-full h-40 sm:h-56 md:h-72 rounded-2xl overflow-hidden shadow-xl mb-10 md:mb-16">
                <img alt="Proyek interior kantor modern oleh Cahaya Interior Sejahtera"
                     class="w-full h-full object-cover object-center"
                     src="{{ asset('images/5.png') }}">
            </div>
            <h2 class="font-bold text-primary text-center leading-tight mb-10 md:mb-14
                        text-[24px] sm:text-[30px] md:text-[38px]">
                {{ __('about.services_title') }}
            </h2>
            <div class="grid grid-cols-2 md:grid-cols-3 gap-6 md:gap-8">
                @foreach([
                    ['icon'=>'home',        'label'=>__('about.service_1')],
                    ['icon'=>'business',    'label'=>__('about.service_2')],
                    ['icon'=>'chair',       'label'=>__('about.service_3')],
                    ['icon'=>'kitchen',     'label'=>__('about.service_4')],
                    ['icon'=>'grid_view',   'label'=>__('about.service_5')],
                    ['icon'=>'construction','label'=>__('about.service_6')],
                ] as $svc)
                <div class="text-center space-y-3 md:space-y-4">
                    <div class="w-14 h-14 md:w-18 md:h-18 mx-auto rounded-full bg-white flex items-center justify-center shadow-md">
                        <span class="material-symbols-outlined text-2xl text-primary">{{ $svc['icon'] }}</span>
                    </div>
                    <h4 class="font-semibold text-primary text-sm sm:text-base md:text-lg leading-snug">{{ $svc['label'] }}</h4>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- STATISTIK -->
    <section class="w-full py-12 md:py-20 px-5 sm:px-8 md:px-16 bg-white border-t border-gray-100">
        <div class="max-w-6xl mx-auto">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-6 text-center">
                <div class="py-4">
                    <div class="font-bold text-primary mb-1 text-4xl md:text-5xl">200+</div>
                    <div class="text-secondary text-xs sm:text-sm uppercase tracking-wider font-medium">{{ __('about.stats_projects') }}</div>
                </div>
                <div class="py-4">
                    <div class="font-bold text-primary mb-1 text-4xl md:text-5xl">200+</div>
                    <div class="text-secondary text-xs sm:text-sm uppercase tracking-wider font-medium">{{ __('about.stats_satisfaction') }}</div>
                </div>
                <div class="py-4">
                    <div class="font-bold text-primary mb-1 text-4xl md:text-5xl">15</div>
                    <div class="text-secondary text-xs sm:text-sm uppercase tracking-wider font-medium">{{ __('about.stats_team') }}</div>
                </div>
                <div class="py-4">
                    <div class="font-bold text-primary mb-1 text-4xl md:text-5xl">100%</div>
                    <div class="text-secondary text-xs sm:text-sm uppercase tracking-wider font-medium">{{ __('about.stats_quality') }}</div>
                </div>
            </div>
        </div>
    </section>

</main>
@endsection
