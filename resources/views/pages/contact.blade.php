@extends('layouts.app')

@section('title', 'Hubungi Kami - Cahaya Interior Sejahtera')
@section('meta_description', 'Konsultasikan kebutuhan interior Anda dengan tim Cahaya Interior Sejahtera. Layanan interior rumah, kantor, furniture custom, dan renovasi interior.')

@section('content')
<!-- Header Section -->
<header class="pt-24 md:pt-32 pb-8 md:pb-14 px-5 sm:px-8 md:px-16 max-w-6xl mx-auto">
    <div class="max-w-3xl">
        <h1 class="font-bold text-primary leading-tight mb-4
                    text-[28px] sm:text-[36px] md:text-[44px]">{{ __('contact.title') }}</h1>
        <p class="text-secondary leading-relaxed text-sm sm:text-base font-light">
            {{ __('contact.subtitle') }}
        </p>
    </div>
</header>

<!-- Main Content: Form & Info Split -->
<main class="px-5 sm:px-8 md:px-16 max-w-6xl mx-auto pb-14 md:pb-24">
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 md:gap-gutter">
        <!-- Left Column: Contact Form -->
        <div class="lg:col-span-7">
            <form action="{{ route('contact.submit') }}" method="POST" class="flex flex-col gap-6 md:gap-8 pr-0 lg:pr-12">
                @csrf
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-5 md:gap-8">
                    <div class="flex flex-col">
                        <label class="sr-only" for="firstName">{{ __('contact.first_name') }}</label>
                        <input class="border-b border-secondary bg-transparent focus:border-primary focus:outline-none py-4 font-body-md text-body-md placeholder-secondary text-primary transition-colors w-full @error('firstName') border-error @enderror"
                               id="firstName" name="firstName" placeholder="{{ __('contact.first_name') }}" type="text" value="{{ old('firstName') }}">
                        @error('firstName')
                        <p class="text-error text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="flex flex-col">
                        <label class="sr-only" for="lastName">{{ __('contact.last_name') }}</label>
                        <input class="border-b border-secondary bg-transparent focus:border-primary focus:outline-none py-4 font-body-md text-body-md placeholder-secondary text-primary transition-colors w-full @error('lastName') border-error @enderror"
                               id="lastName" name="lastName" placeholder="{{ __('contact.last_name') }}" type="text" value="{{ old('lastName') }}">
                        @error('lastName')
                        <p class="text-error text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <div class="flex flex-col">
                    <label class="sr-only" for="email">{{ __('contact.email') }}</label>
                    <input class="border-b border-secondary bg-transparent focus:border-primary focus:outline-none py-4 font-body-md text-body-md placeholder-secondary text-primary transition-colors w-full @error('email') border-error @enderror"
                           id="email" name="email" placeholder="{{ __('contact.email') }}" type="email" value="{{ old('email') }}">
                    @error('email')
                    <p class="text-error text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div class="flex flex-col">
                    <label class="sr-only" for="subject">{{ __('contact.subject') }}</label>
                    <input class="border-b border-secondary bg-transparent focus:border-primary focus:outline-none py-4 font-body-md text-body-md placeholder-secondary text-primary transition-colors w-full @error('subject') border-error @enderror"
                           id="subject" name="subject" placeholder="{{ __('contact.subject') }}" type="text" value="{{ old('subject') }}">
                    @error('subject')
                    <p class="text-error text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div class="flex flex-col">
                    <label class="sr-only" for="message">{{ __('contact.message') }}</label>
                    <textarea class="border-b border-secondary bg-transparent focus:border-primary focus:outline-none py-4 font-body-md text-body-md placeholder-secondary text-primary transition-colors w-full resize-none @error('message') border-error @enderror"
                              id="message" name="message" placeholder="{{ __('contact.message') }}" rows="4">{{ old('message') }}</textarea>
                    @error('message')
                    <p class="text-error text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mt-2">
                    <button class="bg-primary text-on-primary font-label-lg text-label-lg px-8 py-4 rounded hover:bg-inverse-surface transition-colors duration-300 w-full sm:w-auto" type="submit">
                        {{ __('contact.submit') }}
                    </button>
                </div>
                @if(session('success'))
                <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded">
                    {{ session('success') }}
                </div>
                @endif
            </form>
        </div>

        <!-- Right Column: Contact Info & WhatsApp -->
        <div class="lg:col-span-5 flex flex-col gap-8 md:gap-12 lg:mt-0 lg:pl-8 lg:border-l border-outline-variant/50">
            <!-- WhatsApp Prominent CTA -->
            <div class="bg-surface-container p-6 md:p-8 rounded-lg">
                <h3 class="font-headline-sm text-[20px] md:text-headline-sm text-primary mb-3 md:mb-4">{{ __('contact.direct_consultation') }}</h3>
                <p class="font-body-md text-body-md text-secondary mb-5 md:mb-6">{{ __('contact.whatsapp_desc') }}</p>
                <a class="inline-flex items-center gap-3 bg-[#25D366] text-white font-label-lg text-label-lg px-5 md:px-6 py-3 md:py-4 rounded hover:opacity-90 transition-opacity"
                   href="https://wa.me/6285776755884" target="_blank" rel="noopener noreferrer">
                    <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">chat</span>
                    {{ __('contact.chat_whatsapp') }}
                </a>
            </div>

            <!-- Office Info -->
            <div class="flex flex-col gap-6 md:gap-8">
                <div>
                    <h4 class="font-label-lg text-label-lg text-secondary uppercase tracking-widest mb-2">{{ __('contact.corporate_office') }}</h4>
                    <p class="font-body-lg text-body-lg text-primary leading-relaxed">
                        Jl. Sudirman Kav. 52-53<br>
                        Sudirman Central Business District (SCBD)<br>
                        Jakarta Selatan, 12190
                    </p>
                </div>
                <div>
                    <h4 class="font-label-lg text-label-lg text-secondary uppercase tracking-widest mb-2">{{ __('contact.contact_details') }}</h4>
                    <p class="font-body-lg text-body-lg text-primary mb-1">
                        <a class="hover:text-tertiary-fixed-dim transition-colors break-all" href="mailto:cahayainteriorsejahtera@gmail.com">cahayainteriorsejahtera@gmail.com</a>
                    </p>
                    <p class="font-body-lg text-body-lg text-primary">
                        <a class="hover:text-tertiary-fixed-dim transition-colors" href="https://wa.me/6285776755884" target="_blank" rel="noopener noreferrer">+62 857-7675-5884</a>
                    </p>
                </div>
                <div>
                    <h4 class="font-label-lg text-label-lg text-secondary uppercase tracking-widest mb-2">Follow Us</h4>
                    <div class="flex gap-4">
                        <a href="https://www.instagram.com/cahayainteriorsejahtera_?igsh=d2tydTJoYWMwMXI4" target="_blank" rel="noopener noreferrer" class="text-secondary hover:text-primary transition-colors">
                            <span class="material-symbols-outlined text-3xl">photo_camera</span>
                        </a>
                        <a href="https://www.tiktok.com/@cahayainteriorsejahteraa?_r=1&_t=ZS-973nIp4BVCR" target="_blank" rel="noopener noreferrer" class="text-secondary hover:text-primary transition-colors">
                            <span class="material-symbols-outlined text-3xl">movie</span>
                        </a>
                    </div>
                </div>
                <div>
                    <h4 class="font-label-lg text-label-lg text-secondary uppercase tracking-widest mb-2">{{ __('contact.business_hours') }}</h4>
                    <ul class="font-body-md text-body-md text-primary flex flex-col gap-2">
                        <li class="flex justify-between border-b border-surface-variant pb-2">
                            <span>{{ __('contact.monday_friday') }}</span>
                            <span class="text-right">09:00 - 18:00</span>
                        </li>
                        <li class="flex justify-between border-b border-surface-variant pb-2">
                            <span>{{ __('contact.saturday') }}</span>
                            <span class="text-right text-secondary">{{ __('contact.by_appointment') }}</span>
                        </li>
                        <li class="flex justify-between text-secondary">
                            <span>{{ __('contact.sunday') }}</span>
                            <span>{{ __('contact.closed') }}</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</main>

<!-- Map Section -->
<section class="w-full h-[280px] sm:h-[400px] md:h-[500px] bg-surface-container relative">
    <img alt="Lokasi Cahaya Interior Sejahtera - SCBD Jakarta Selatan" class="w-full h-full object-cover grayscale opacity-80" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBQXGpt1V0tN79SHZLZq8UPkhEuHrfKWeegNmLhRjBZe5FZMkmzd89hpA0ShCvfVX39gCbSVTE7KbDvSIaD1UZeNBi4N-SUxOgt-doWkNDVlNm8EbLr-EeeKutRsFSITeXjvwfmuKNnCz_dCK62zRL1jKh_P_zqHrJh32e2zb8jXqwu557EWK6J7I2p5N8zGvUMjm64Wuv-uFsshbQ3c820eGcdXnAFot3NLOIDXLYEMUkSQIh8shNOwgl-YtS66gx1b5VWa1FFsulB">
    <div class="absolute inset-0 flex items-center justify-center pointer-events-none">
        <div class="bg-primary text-on-primary p-4 rounded-full shadow-lg transform -translate-y-6">
            <span class="material-symbols-outlined text-3xl" style="font-variation-settings: 'FILL' 1;">location_on</span>
        </div>
    </div>
</section>
@endsection
