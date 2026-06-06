@extends('layouts.app')

@section('title', 'Contact - Cahaya Interior Sejahtera')
@section('meta_description', 'Get in touch with Cahaya Interior Sejahtera. Whether you envision a complete architectural redesign or seek subtle refinements, our team is ready to collaborate.')

@section('content')
<!-- Header Section -->
<header class="pt-[180px] pb-section-gap px-margin-mobile md:px-margin-desktop max-w-container-max mx-auto">
    <div class="max-w-3xl">
        <h1 class="font-headline-xl text-headline-xl text-primary mb-6">Get in Touch</h1>
        <p class="font-body-lg text-body-lg text-secondary">
            Whether you are envisioning a complete architectural redesign or seeking subtle refinements for your space, our team is ready to collaborate. Reach out to discuss your next premium interior project.
        </p>
    </div>
</header>

<!-- Main Content: Form & Info Split -->
<main class="px-margin-mobile md:px-margin-desktop max-w-container-max mx-auto pb-section-gap">
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-gutter">
        <!-- Left Column: Contact Form -->
        <div class="lg:col-span-7">
            <form action="{{ route('contact.submit') }}" method="POST" class="flex flex-col gap-8 pr-0 lg:pr-12">
                @csrf
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <div class="flex flex-col">
                        <label class="sr-only" for="firstName">First Name</label>
                        <input class="border-b border-secondary bg-transparent focus:border-primary focus:outline-none py-4 font-body-md text-body-md placeholder-secondary text-primary transition-colors w-full @error('firstName') border-error @enderror" id="firstName" name="firstName" placeholder="First Name" type="text" value="{{ old('firstName') }}">
                        @error('firstName')
                        <p class="text-error text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="flex flex-col">
                        <label class="sr-only" for="lastName">Last Name</label>
                        <input class="border-b border-secondary bg-transparent focus:border-primary focus:outline-none py-4 font-body-md text-body-md placeholder-secondary text-primary transition-colors w-full @error('lastName') border-error @enderror" id="lastName" name="lastName" placeholder="Last Name" type="text" value="{{ old('lastName') }}">
                        @error('lastName')
                        <p class="text-error text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <div class="flex flex-col">
                    <label class="sr-only" for="email">Email Address</label>
                    <input class="border-b border-secondary bg-transparent focus:border-primary focus:outline-none py-4 font-body-md text-body-md placeholder-secondary text-primary transition-colors w-full @error('email') border-error @enderror" id="email" name="email" placeholder="Email Address" type="email" value="{{ old('email') }}">
                    @error('email')
                    <p class="text-error text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div class="flex flex-col">
                    <label class="sr-only" for="subject">Project Type / Subject</label>
                    <input class="border-b border-secondary bg-transparent focus:border-primary focus:outline-none py-4 font-body-md text-body-md placeholder-secondary text-primary transition-colors w-full @error('subject') border-error @enderror" id="subject" name="subject" placeholder="Project Type / Subject" type="text" value="{{ old('subject') }}">
                    @error('subject')
                    <p class="text-error text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div class="flex flex-col">
                    <label class="sr-only" for="message">Message</label>
                    <textarea class="border-b border-secondary bg-transparent focus:border-primary focus:outline-none py-4 font-body-md text-body-md placeholder-secondary text-primary transition-colors w-full resize-none @error('message') border-error @enderror" id="message" name="message" placeholder="How can we help you?" rows="4">{{ old('message') }}</textarea>
                    @error('message')
                    <p class="text-error text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mt-4">
                    <button class="bg-primary text-on-primary font-label-lg text-label-lg px-8 py-4 rounded hover:bg-inverse-surface transition-colors duration-300 w-full md:w-auto" type="submit">
                        Submit Inquiry
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
        <div class="lg:col-span-5 flex flex-col gap-12 mt-16 lg:mt-0 lg:pl-8 lg:border-l border-outline-variant/50">
            <!-- WhatsApp Prominent CTA -->
            <div class="bg-surface-container p-8 rounded-lg">
                <h3 class="font-headline-sm text-headline-sm text-primary mb-4">Direct Consultation</h3>
                <p class="font-body-md text-body-md text-secondary mb-6">Prefer an immediate response? Chat with our lead design consultant directly via WhatsApp for a preliminary discussion.</p>
                <a class="inline-flex items-center gap-3 bg-[#25D366] text-white font-label-lg text-label-lg px-6 py-4 rounded hover:opacity-90 transition-opacity" href="https://wa.me/62215550198" target="_blank" rel="noopener noreferrer">
                    <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">chat</span>
                    Chat on WhatsApp
                </a>
            </div>

            <!-- Office Info -->
            <div class="flex flex-col gap-8">
                <div>
                    <h4 class="font-label-lg text-label-lg text-secondary uppercase tracking-widest mb-2">Corporate Office</h4>
                    <p class="font-body-lg text-body-lg text-primary">
                        Jl. Sudirman Kav. 52-53<br>
                        Sudirman Central Business District (SCBD)<br>
                        Jakarta Selatan, 12190
                    </p>
                </div>
                <div>
                    <h4 class="font-label-lg text-label-lg text-secondary uppercase tracking-widest mb-2">Contact Details</h4>
                    <p class="font-body-lg text-body-lg text-primary mb-1">
                        <a class="hover:text-tertiary-fixed-dim transition-colors" href="mailto:inquiries@cahayainterior.com">inquiries@cahayainterior.com</a>
                    </p>
                    <p class="font-body-lg text-body-lg text-primary">
                        <a class="hover:text-tertiary-fixed-dim transition-colors" href="tel:+62215550198">+62 21 555 0198</a>
                    </p>
                </div>
                <div>
                    <h4 class="font-label-lg text-label-lg text-secondary uppercase tracking-widest mb-2">Business Hours</h4>
                    <ul class="font-body-md text-body-md text-primary flex flex-col gap-2">
                        <li class="flex justify-between border-b border-surface-variant pb-2">
                            <span>Monday - Friday</span>
                            <span>09:00 AM - 06:00 PM</span>
                        </li>
                        <li class="flex justify-between border-b border-surface-variant pb-2">
                            <span>Saturday</span>
                            <span>By Appointment Only</span>
                        </li>
                        <li class="flex justify-between text-secondary">
                            <span>Sunday</span>
                            <span>Closed</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</main>

<!-- Map Section -->
<section class="w-full h-[600px] bg-surface-container relative">
    <img alt="Map Placeholder" class="w-full h-full object-cover grayscale opacity-80" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBQXGpt1V0tN79SHZLZq8UPkhEuHrfKWeegNmLhRjBZe5FZMkmzd89hpA0ShCvfVX39gCbSVTE7KbDvSIaD1UZeNBi4N-SUxOgt-doWkNDVlNm8EbLr-EeeKutRsFSITeXjvwfmuKNnCz_dCK62zRL1jKh_P_zqHrJh32e2zb8jXqwu557EWK6J7I2p5N8zGvUMjm64Wuv-uFsshbQ3c820eGcdXnAFot3NLOIDXLYEMUkSQIh8shNOwgl-YtS66gx1b5VWa1FFsulB">
    <!-- Location Pin Overlay -->
    <div class="absolute inset-0 flex items-center justify-center pointer-events-none">
        <div class="bg-primary text-on-primary p-4 rounded-full shadow-lg transform -translate-y-6">
            <span class="material-symbols-outlined text-3xl" style="font-variation-settings: 'FILL' 1;">location_on</span>
        </div>
    </div>
</section>
@endsection
