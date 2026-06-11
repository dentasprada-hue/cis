<footer class="w-full py-14 md:py-20 border-t border-gray-200 bg-white">
    <div class="max-w-6xl mx-auto px-5 sm:px-8 md:px-16">
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-10">
            <!-- Brand -->
            <div class="sm:col-span-2 md:col-span-1">
                <div class="font-headline-sm text-[20px] md:text-headline-sm text-primary mb-3 leading-tight">
                    Cahaya Interior Sejahtera
                </div>
                <p class="font-body-sm text-body-sm text-on-surface-variant leading-relaxed">
                    Jasa desain dan pengerjaan interior untuk rumah, kantor, dan ruang komersial.
                </p>
            </div>

            <!-- Navigation Links -->
            <div>
                <h4 class="font-label-lg text-label-lg text-primary mb-4 uppercase tracking-wider">Halaman</h4>
                <ul class="flex flex-col gap-3">
                    <li><a href="{{ route('home') }}" class="font-body-sm text-body-sm text-secondary hover:text-primary transition-colors">{{ __('nav.home') }}</a></li>
                    <li><a href="{{ route('about') }}" class="font-body-sm text-body-sm text-secondary hover:text-primary transition-colors">{{ __('nav.about') }}</a></li>
                    <li><a href="{{ route('projects') }}" class="font-body-sm text-body-sm text-secondary hover:text-primary transition-colors">{{ __('nav.projects') }}</a></li>
                    <li><a href="{{ route('contact') }}" class="font-body-sm text-body-sm text-secondary hover:text-primary transition-colors">{{ __('nav.contact') }}</a></li>
                </ul>
            </div>

            <!-- Connect -->
            <div>
                <h4 class="font-label-lg text-label-lg text-primary mb-4 uppercase tracking-wider">Hubungi Kami</h4>
                <div class="flex flex-col gap-3">
                    <a href="https://wa.me/6285776755884" target="_blank" rel="noopener noreferrer" class="flex items-center gap-3 text-secondary hover:text-primary transition-colors font-body-sm">
                        <span class="material-symbols-outlined text-[20px] shrink-0">chat</span>
                        WhatsApp
                    </a>
                    <a href="https://www.instagram.com/cahayainteriorsejahtera_?igsh=d2tydTJoYWMwMXI4" target="_blank" rel="noopener noreferrer" class="flex items-center gap-3 text-secondary hover:text-primary transition-colors font-body-sm">
                        <span class="material-symbols-outlined text-[20px] shrink-0">photo_camera</span>
                        Instagram
                    </a>
                    <a href="https://www.tiktok.com/@cahayainteriorsejahteraa?_r=1&_t=ZS-973nIp4BVCR" target="_blank" rel="noopener noreferrer" class="flex items-center gap-3 text-secondary hover:text-primary transition-colors font-body-sm">
                        <span class="material-symbols-outlined text-[20px] shrink-0">movie</span>
                        TikTok
                    </a>
                    <a href="https://maps.google.com/?q=Jl.+Sudirman+Kav.+52-53+SCBD+Jakarta+Selatan" target="_blank" rel="noopener noreferrer" class="flex items-center gap-3 text-secondary hover:text-primary transition-colors font-body-sm">
                        <span class="material-symbols-outlined text-[20px] shrink-0">location_on</span>
                        Google Maps
                    </a>
                </div>
            </div>

            <!-- Contact Info -->
            <div>
                <h4 class="font-label-lg text-label-lg text-primary mb-4 uppercase tracking-wider">Kontak</h4>
                <div class="flex flex-col gap-2">
                    <a href="mailto:cahayainteriorsejahtera@gmail.com" class="font-body-sm text-body-sm text-secondary hover:text-primary transition-colors break-all">cahayainteriorsejahtera@gmail.com</a>
                    <a href="https://wa.me/6285776755884" target="_blank" rel="noopener noreferrer" class="font-body-sm text-body-sm text-secondary hover:text-primary transition-colors">+62 857-7675-5884</a>
                    <p class="font-body-sm text-body-sm text-secondary mt-2 leading-relaxed">Jl. Sudirman Kav. 52-53, SCBD, Jakarta Selatan</p>
                </div>
            </div>
        </div>

        <!-- Bottom bar -->
        <div class="mt-12 pt-6 border-t border-outline-variant/50 flex flex-col sm:flex-row justify-between items-center gap-3">
            <p class="font-body-sm text-body-sm text-secondary text-center sm:text-left">
                &copy; {{ date('Y') }} Cahaya Interior Sejahtera. All rights reserved.
            </p>
            <p class="font-body-sm text-body-sm text-secondary">
                Jasa Interior Jakarta
            </p>
        </div>
    </div>
</footer>
