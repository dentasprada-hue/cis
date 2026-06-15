@extends('layouts.app')

@section('title', __('contact.page_title') . ' - Cahaya Interior Sejahtera')
@section('meta_description', 'Konsultasikan kebutuhan interior rumah, kantor, atau ruang komersial Anda bersama tim Cahaya Interior Sejahtera. Layanan desain interior premium di Bogor dan Jakarta.')

@section('content')
<main>
    <header class="pt-28 md:pt-36 pb-10 md:pb-14 px-5 sm:px-8 md:px-16 relative overflow-hidden">
        <div class="absolute top-0 right-0 w-1/3 h-full opacity-[0.03] pointer-events-none">
            <div class="w-full h-full" style="background: radial-gradient(circle at 70% 30%, #C5A059 0%, transparent 70%);"></div>
        </div>
        <div class="max-w-[1280px] mx-auto relative z-10">
            <div class="flex items-center gap-4 mb-4 md:mb-5">
                <span class="w-12 h-px bg-premium-brass"></span>
                <span class="font-label-lg text-label-lg text-premium-brass uppercase tracking-[0.2em]">Contact</span>
            </div>
            <div class="flex flex-col md:flex-row md:items-end md:justify-between gap-4">
                <div class="max-w-2xl">
                    <h1 class="font-headline-lg text-[28px] sm:text-[36px] md:text-headline-lg text-primary leading-tight mb-2">
                        Let's Create <span class="text-premium-brass">Your Dream Space</span>
                    </h1>
                    <p class="text-secondary text-body-md max-w-xl leading-relaxed">
                        {{ __('contact.page_subtitle') }}
                    </p>
                </div>
                <div class="shrink-0 hidden md:block">
                    <div class="flex items-center gap-3 text-secondary">
                        <span class="font-label-md text-label-md uppercase tracking-widest">{{ __('contact.office_address') }}</span>
                        <span class="w-6 h-px bg-outline-variant"></span>
                        <span class="font-body-sm text-body-sm">Bogor, Jawa Barat</span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <section class="px-5 sm:px-8 md:px-16 pb-14 md:pb-20">
        <div class="max-w-[1280px] mx-auto">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 md:gap-gutter">
                <div class="lg:col-span-7">
                    <form onsubmit="event.preventDefault(); submitToWhatsApp(this)" class="flex flex-col gap-6 md:gap-8">
                        <div class="flex flex-col">
                            <label for="full_name" class="font-label-lg text-label-lg text-secondary uppercase tracking-widest mb-2">{{ __('contact.full_name') }}</label>
                            <input id="full_name" name="full_name" type="text" required
                                class="border-b border-outline-variant bg-transparent focus:border-premium-brass focus:outline-none py-3 font-body-md text-body-md placeholder-secondary/50 text-primary transition-colors duration-300 w-full"
                                placeholder="Masukkan nama lengkap">
                            <span class="text-error text-sm mt-1 hidden" data-error="full_name"></span>
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 md:gap-8">
                            <div class="flex flex-col">
                                <label for="email" class="font-label-lg text-label-lg text-secondary uppercase tracking-widest mb-2">{{ __('contact.email') }}</label>
                                <input id="email" name="email" type="email" required
                                    class="border-b border-outline-variant bg-transparent focus:border-premium-brass focus:outline-none py-3 font-body-md text-body-md placeholder-secondary/50 text-primary transition-colors duration-300 w-full"
                                    placeholder="contoh@email.com">
                                <span class="text-error text-sm mt-1 hidden" data-error="email"></span>
                            </div>
                            <div class="flex flex-col">
                                <label for="phone" class="font-label-lg text-label-lg text-secondary uppercase tracking-widest mb-2">{{ __('contact.phone') }}</label>
                                <input id="phone" name="phone" type="tel" required
                                    class="border-b border-outline-variant bg-transparent focus:border-premium-brass focus:outline-none py-3 font-body-md text-body-md placeholder-secondary/50 text-primary transition-colors duration-300 w-full"
                                    placeholder="+62 8xx-xxxx-xxxx">
                                <span class="text-error text-sm mt-1 hidden" data-error="phone"></span>
                            </div>
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 md:gap-8">
                            <div class="flex flex-col">
                                <label for="project_type" class="font-label-lg text-label-lg text-secondary uppercase tracking-widest mb-2">{{ __('contact.project_type') }}</label>
                                <div class="relative">
                                    <select id="project_type" name="project_type" required style="-webkit-appearance:none;-moz-appearance:none;appearance:none;background:transparent"
                                        class="border-b border-outline-variant bg-transparent focus:border-premium-brass focus:outline-none py-3 font-body-md text-body-md text-primary transition-colors duration-300 w-full pr-8">
                                        <option value="" disabled selected>Pilih jenis proyek</option>
                                        <option value="Residential">Interior Rumah</option>
                                        <option value="Office">Interior Kantor</option>
                                        <option value="Commercial">Ruang Komersial</option>
                                        <option value="Furniture">Furniture Custom</option>
                                        <option value="Renovation">Renovasi Interior</option>
                                        <option value="Other">Lainnya</option>
                                    </select>
                                    <span class="absolute right-0 top-1/2 -translate-y-1/2 text-secondary pointer-events-none material-symbols-outlined">expand_more</span>
                                </div>
                                <span class="text-error text-sm mt-1 hidden" data-error="project_type"></span>
                            </div>
                            <div class="flex flex-col">
                                <label for="project_location" class="font-label-lg text-label-lg text-secondary uppercase tracking-widest mb-2">{{ __('contact.project_location') }}</label>
                                <input id="project_location" name="project_location" type="text" required
                                    class="border-b border-outline-variant bg-transparent focus:border-premium-brass focus:outline-none py-3 font-body-md text-body-md placeholder-secondary/50 text-primary transition-colors duration-300 w-full"
                                    placeholder="Contoh: Bogor, Jakarta">
                                <span class="text-error text-sm mt-1 hidden" data-error="project_location"></span>
                            </div>
                        </div>

                        <div class="flex flex-col">
                            <label for="message" class="font-label-lg text-label-lg text-secondary uppercase tracking-widest mb-2">{{ __('contact.message') }}</label>
                            <textarea id="message" name="message" rows="4" required
                                class="border-b border-outline-variant bg-transparent focus:border-premium-brass focus:outline-none py-3 font-body-md text-body-md placeholder-secondary/50 text-primary transition-colors duration-300 w-full resize-none"
                                placeholder="Deskripsikan kebutuhan proyek interior Anda..."></textarea>
                            <span class="text-error text-sm mt-1 hidden" data-error="message"></span>
                        </div>

                        <div class="pt-2">
                            <button type="submit"
                                class="group inline-flex items-center justify-center gap-3 px-8 py-4 bg-primary text-on-primary rounded-lg font-label-lg text-label-lg hover:bg-inverse-surface transition-colors shadow-level-1 w-full sm:w-auto">
                                {{ __('contact.request_consultation') }}
                                <span class="material-symbols-outlined text-[20px] transition-transform duration-300 group-hover:translate-x-1">arrow_forward</span>
                            </button>
                        </div>

                        <div class="bg-surface-container border-l-4 border-premium-brass px-6 py-4 text-primary font-body-md text-body-md hidden" id="success-message">
                            {{ __('contact.success_message') }}
                        </div>
                    </form>

                    <script>
                    function submitToWhatsApp(form) {
                        const fields = ['full_name', 'email', 'phone', 'project_type', 'project_location', 'message'];
                        let valid = true;

                        fields.forEach(function(name) {
                            const input = form.querySelector('[name="' + name + '"]');
                            const error = form.querySelector('[data-error="' + name + '"]');
                            const label = form.querySelector('[for="' + name + '"]');

                            if (!input.value.trim()) {
                                valid = false;
                                input.classList.add('border-error');
                                error.textContent = label ? label.textContent + ' harus diisi.' : 'Field ini harus diisi.';
                                error.classList.remove('hidden');
                            } else {
                                input.classList.remove('border-error');
                                error.classList.add('hidden');
                            }
                        });

                        if (!valid) return;

                        const data = {};
                        fields.forEach(function(name) {
                            data[name] = form.querySelector('[name="' + name + '"]').value.trim();
                        });

                        const message = [
                            '*Consultation Request*',
                            '',
                            '*Nama:* ' + data.full_name,
                            '*Email:* ' + data.email,
                            '*WhatsApp:* ' + data.phone,
                            '*Jenis Proyek:* ' + data.project_type,
                            '*Lokasi:* ' + data.project_location,
                            '*Pesan:* ' + data.message
                        ].join('\n');

                        window.open('https://wa.me/6285776755884?text=' + encodeURIComponent(message), '_blank');

                        document.getElementById('success-message').classList.remove('hidden');
                        document.getElementById('success-message').textContent = 'Pesan berhasil dikirim ke WhatsApp kami.';
                    }
                    </script>
                </div>

                <div class="lg:col-span-5 flex flex-col gap-10">
                    <div class="bg-surface-container-lowest border border-outline-variant/40 rounded-card p-6 md:p-8 shadow-level-1">
                        <div class="w-10 h-px bg-premium-brass mb-5"></div>
                        <h3 class="font-headline-sm text-headline-sm text-primary mb-6">Contact Information</h3>

                        <div class="flex flex-col gap-5">
                            <a href="https://wa.me/6285776755884" target="_blank" rel="noopener noreferrer" class="flex items-start gap-4 group">
                                <span class="material-symbols-outlined text-premium-brass shrink-0 mt-0.5">chat</span>
                                <div>
                                    <p class="font-label-lg text-label-lg text-secondary uppercase tracking-widest mb-0.5">WhatsApp</p>
                                    <p class="font-body-md text-body-md text-primary group-hover:text-premium-brass transition-colors">+62 857-7675-5884</p>
                                </div>
                            </a>
                            <div class="h-px bg-outline-variant/30"></div>

                            <a href="https://mail.google.com/mail/?view=cm&fs=1&to=cahayainteriorsejahtera@gmail.com" target="_blank" rel="noopener noreferrer" class="flex items-start gap-4 group">
                                <span class="material-symbols-outlined text-premium-brass shrink-0 mt-0.5">mail</span>
                                <div>
                                    <p class="font-label-lg text-label-lg text-secondary uppercase tracking-widest mb-0.5">Email</p>
                                    <p class="font-body-md text-body-md text-primary group-hover:text-premium-brass transition-colors break-all">cahayainteriorsejahtera@gmail.com</p>
                                </div>
                            </a>
                            <div class="h-px bg-outline-variant/30"></div>

                            <a href="https://www.google.com/maps?q=Jl+Griya+Alam+Sentosa+No+101+Dusun+Pasir+Angin+Cileungsi+Bogor+Jawa+Barat" target="_blank" rel="noopener noreferrer" class="flex items-start gap-4 group">
                                <span class="material-symbols-outlined text-premium-brass shrink-0 mt-0.5">location_on</span>
                                <div>
                                    <p class="font-label-lg text-label-lg text-secondary uppercase tracking-widest mb-0.5">{{ __('contact.office_address') }}</p>
                                    <p class="font-body-md text-body-md text-primary leading-relaxed">Jl Griya Alam Sentosa No 101 Dusun Pasir Angin Cileungsi Bogor Jawa Barat</p>
                                </div>
                            </a>
                            <div class="h-px bg-outline-variant/30"></div>

                            <div class="flex items-start gap-4">
                                <span class="material-symbols-outlined text-premium-brass shrink-0 mt-0.5">schedule</span>
                                <div>
                                    <p class="font-label-lg text-label-lg text-secondary uppercase tracking-widest mb-0.5">{{ __('contact.business_hours_label') }}</p>
                                    <ul class="font-body-md text-body-md text-primary flex flex-col gap-1.5">
                                        <li class="flex justify-between gap-6">
                                            <span>{{ __('contact.monday_friday') }}</span>
                                            <span>{{ __('contact.hours_weekday') }}</span>
                                        </li>
                                        <li class="flex justify-between gap-6">
                                            <span>{{ __('contact.saturday') }}</span>
                                            <span class="text-secondary">{{ __('contact.hours_saturday') }}</span>
                                        </li>
                                        <li class="flex justify-between gap-6">
                                            <span>{{ __('contact.sunday') }}</span>
                                            <span class="text-secondary">{{ __('contact.by_appointment') }}</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="mt-8 pt-6 border-t border-outline-variant/30">
                            <a href="https://wa.me/6285776755884" target="_blank" rel="noopener noreferrer"
                                class="group inline-flex items-center justify-center gap-3 px-6 py-4 bg-primary text-on-primary rounded-lg font-label-lg text-label-lg hover:bg-inverse-surface transition-colors shadow-level-1 w-full">
                                <span class="material-symbols-outlined text-[20px]">chat</span>
                                {{ __('contact.chat_via_whatsapp') }}
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="w-full py-14 md:py-24 px-5 sm:px-8 md:px-16 text-center">
        <div class="max-w-2xl mx-auto">
            <h2 class="font-headline-lg text-primary leading-tight mb-4 text-2xl sm:text-3xl md:text-headline-lg">
                {{ __('contact.cta_title') }}
            </h2>
            <p class="font-body-lg text-body-lg text-secondary leading-relaxed mb-8 md:mb-10">
                {{ __('contact.cta_subtitle') }}
            </p>
            <div class="flex flex-col sm:flex-row gap-3 justify-center items-stretch sm:items-center">
                <a href="https://wa.me/6285776755884" target="_blank" rel="noopener noreferrer"
                    class="inline-flex items-center justify-center gap-2 px-8 py-4 bg-primary text-on-primary rounded-lg font-label-lg text-label-lg hover:bg-inverse-surface transition-colors shadow-level-1">
                    <span class="material-symbols-outlined text-[18px]">chat</span>
                    {{ __('contact.cta_primary') }}
                </a>
                <a href="{{ route('projects', ['locale' => app()->getLocale()]) }}"
                    class="inline-flex items-center justify-center px-8 py-4 border border-primary text-primary rounded-lg font-label-lg text-label-lg hover:bg-primary hover:text-on-primary transition-colors">
                    <span class="material-symbols-outlined text-[18px]">grid_view</span>
                    {{ __('contact.cta_secondary') }}
                </a>
            </div>
        </div>
    </section>
</main>
@endsection
