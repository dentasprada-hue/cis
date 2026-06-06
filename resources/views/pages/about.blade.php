@extends('layouts.app')

@section('title', 'About Us | Cahaya Interior Sejahtera')
@section('meta_description', 'Learn about Cahaya Interior Sejahtera - a premier interior design firm crafting timeless elegance through architectural precision and modern luxury.')

@section('content')
<main class="pt-[104px]">
    <!-- Hero Section -->
    <section class="py-section-gap px-margin-mobile md:px-margin-desktop max-w-container-max mx-auto">
        <div class="grid grid-cols-1 md:grid-cols-12 gap-gutter items-center">
            <div class="md:col-span-5 space-y-6">
                <h1 class="font-headline-lg-mobile md:font-headline-xl text-headline-lg-mobile md:text-headline-xl text-primary">
                    Crafting Timeless <br><span class="text-secondary">Elegance</span>
                </h1>
                <p class="font-body-lg text-body-lg text-secondary max-w-md">
                    Cahaya Interior Sejahtera merges architectural precision with modern luxury, defining the art of living through meticulous design and masterful construction.
                </p>
            </div>
            <div class="md:col-span-7 h-[500px] md:h-[700px] relative rounded-xl overflow-hidden shadow-level-1">
                <img alt="Luxurious minimalist interior design showcasing a spacious living area with natural light, high-end materials, and elegant architectural details." class="w-full h-full object-cover" src="https://lh3.googleusercontent.com/aida-public/AB6AXuB75Ecxqf6m1n__Eti_bqPt_LYimyyDhqHrwrAdUiCAjX-Sr4vBossRpPxyDOKE8LR2qv4I4F3_97cRRZPytA3dDhPv_aZUxcCN9VzbO29dpbW4mNbGx_PqqMkYJodH_yLxdbxEHMVnLnevXvKRf55YoF_REICNMbgkfuLFJQ0NFbL7QRAQz6Ek9jp66i5ciGc_qGQ81cG8t2U7LGEdE9Z-kYhBAKHqvYvTqLDpfDgj1kh-oFPG0K_3nQieUSKtb6Lu1--qPUcKiEbM">
            </div>
        </div>
    </section>

    <!-- The Art of Living -->
    <section class="py-section-gap bg-surface-container-lowest">
        <div class="px-margin-mobile md:px-margin-desktop max-w-container-max mx-auto">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-gutter md:gap-[120px] items-center">
                <div class="order-2 md:order-1 h-[600px] rounded-xl overflow-hidden shadow-level-1">
                    <img alt="Detail shot of premium interior materials and textures." class="w-full h-full object-cover" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBDPhZCFPV_2eG7vBvzJPrTOuFeOQUS2baLukYVKE_Xbh9nK6E0v_QfajBsMAwqZnDLM0vN2JHY6TkrHgr6WUMS4fwm3sLa2buI8omq_7RBfuHSl6J3o-4Ur882EawLYh7hRL9xJ3V1MvAmHbwexVYSapDTU4ZYHQk9Vyo8JODrKLPmpOCZs3nwbPZhpUXwqNCCr5-0iaJF5Spu0CsBbcRj9Aosr3mZ9_ZeuJG8mydYaPWpagn4IaaFJuLoqD9rCLckeENaODKx_3i-">
                </div>
                <div class="order-1 md:order-2 space-y-8">
                    <div class="w-12 h-1 bg-primary"></div>
                    <h2 class="font-headline-lg-mobile md:font-headline-lg text-headline-lg-mobile md:text-headline-lg text-primary">
                        The Art of Living
                    </h2>
                    <div class="space-y-6 font-body-lg text-body-lg text-secondary">
                        <p>
                            Founded on the belief that spaces profoundly impact human experience, Cahaya Interior Sejahtera was established to elevate the standard of architectural interiors. We do not merely decorate; we orchestrate environments.
                        </p>
                        <p>
                            Our approach is deeply rooted in structural integrity and aesthetic refinement. Every project is a synthesis of client vision and our rigorous design philosophy, resulting in spaces that are both breathtakingly beautiful and fundamentally functional.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Vision & Mission -->
    <section class="py-section-gap px-margin-mobile md:px-margin-desktop max-w-container-max mx-auto">
        <div class="text-center mb-16 space-y-4">
            <h2 class="font-headline-lg-mobile md:font-headline-lg text-headline-lg-mobile md:text-headline-lg text-primary">Our Direction</h2>
            <p class="font-body-lg text-body-lg text-secondary max-w-2xl mx-auto">The principles that guide our every blueprint and build.</p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-gutter">
            <div class="bg-surface-container-lowest p-12 rounded-xl shadow-level-1 border border-outline-variant/20 hover:shadow-lg transition-shadow duration-300">
                <span class="material-symbols-outlined text-4xl text-primary mb-6 block">visibility</span>
                <h3 class="font-headline-md text-headline-md text-primary mb-4">Vision</h3>
                <p class="font-body-md text-body-md text-secondary leading-relaxed">
                    To be the premier architecture and interior design firm recognized for defining modern luxury through innovative spatial solutions and uncompromising quality.
                </p>
            </div>
            <div class="bg-surface-container-lowest p-12 rounded-xl shadow-level-1 border border-outline-variant/20 hover:shadow-lg transition-shadow duration-300">
                <span class="material-symbols-outlined text-4xl text-primary mb-6 block">flag</span>
                <h3 class="font-headline-md text-headline-md text-primary mb-4">Mission</h3>
                <p class="font-body-md text-body-md text-secondary leading-relaxed">
                    To deliver transformative environments that exceed client expectations by seamlessly integrating sophisticated design, superior materials, and impeccable craftsmanship.
                </p>
            </div>
        </div>
    </section>

    <!-- Company Values -->
    <section class="py-section-gap bg-surface-container-lowest border-y border-outline-variant/20">
        <div class="px-margin-mobile md:px-margin-desktop max-w-container-max mx-auto">
            <h2 class="font-headline-lg-mobile md:font-headline-lg text-headline-lg-mobile md:text-headline-lg text-primary text-center mb-20">Core Values</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-gutter">
                <!-- Value 1 -->
                <div class="text-center space-y-6">
                    <div class="w-20 h-20 mx-auto rounded-full bg-surface flex items-center justify-center shadow-level-1">
                        <span class="material-symbols-outlined text-3xl text-primary">verified_user</span>
                    </div>
                    <h4 class="font-headline-sm text-headline-sm text-primary">Integrity</h4>
                    <p class="font-body-sm text-body-sm text-secondary px-4">
                        Transparency and honesty form the foundation of our client relationships and project execution.
                    </p>
                </div>
                <!-- Value 2 -->
                <div class="text-center space-y-6">
                    <div class="w-20 h-20 mx-auto rounded-full bg-surface flex items-center justify-center shadow-level-1">
                        <span class="material-symbols-outlined text-3xl text-primary">architecture</span>
                    </div>
                    <h4 class="font-headline-sm text-headline-sm text-primary">Creativity</h4>
                    <p class="font-body-sm text-body-sm text-secondary px-4">
                        Pushing the boundaries of conventional design to deliver unique, personalized, and forward-thinking spaces.
                    </p>
                </div>
                <!-- Value 3 -->
                <div class="text-center space-y-6">
                    <div class="w-20 h-20 mx-auto rounded-full bg-surface flex items-center justify-center shadow-level-1">
                        <span class="material-symbols-outlined text-3xl text-primary">diamond</span>
                    </div>
                    <h4 class="font-headline-sm text-headline-sm text-primary">Quality</h4>
                    <p class="font-body-sm text-body-sm text-secondary px-4">
                        An unwavering commitment to excellence in materials, finishes, and the finer details of craftsmanship.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Team Section -->
    <section class="py-section-gap px-margin-mobile md:px-margin-desktop max-w-container-max mx-auto">
        <div class="flex flex-col md:flex-row justify-between items-end mb-16 space-y-6 md:space-y-0">
            <div class="space-y-4 max-w-2xl">
                <h2 class="font-headline-lg-mobile md:font-headline-lg text-headline-lg-mobile md:text-headline-lg text-primary">Leadership</h2>
                <p class="font-body-lg text-body-lg text-secondary">The visionary minds shaping the future of interior architecture.</p>
            </div>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-gutter">
            <!-- Team Member 1 -->
            <div class="group cursor-pointer">
                <div class="relative overflow-hidden rounded-xl h-[400px] mb-6 bg-surface">
                    <img alt="Portrait of Principal Architect" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCKVgdcqzoklB4t6lDcecR8uj-duktE_ZbxihBmkulYHm1CCvsnq0yMGrB0E80XnueqcM7KY4tYfb4SLtyJuGyzJJ4QiK_vn-0JxajQJSVlaUOyPz3SvlECUdaVEsFoS1YhQ5-mmlIsUiApiDeVSN1mhBUJvrvb0WBBWkBmlckZcihMk8osolIYMZs4bfRw_VmhkNUXs814_vEQfDJCGfWvg_KOtSv65JhQIhEArxDDXRrkrZh_9mgpTFBq44ievZxs0pHJTajFf-Qe">
                </div>
                <h4 class="font-headline-sm text-headline-sm text-primary">Ar. Budi Santoso</h4>
                <p class="font-label-lg text-label-lg text-secondary mt-1">Principal Architect</p>
            </div>
            <!-- Team Member 2 -->
            <div class="group cursor-pointer">
                <div class="relative overflow-hidden rounded-xl h-[400px] mb-6 bg-surface">
                    <img alt="Portrait of Head of Interior Design" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBVN2SRjuKlN-_j8Mh_QXVo034z787_4sVUTkqHQBhhtM0R6wOe5x_JQb9FWHR4FciwKw6eVISPz0lat81yCFR52HwtUgQ8wh8rAOfhryAzaPc3mWdyiF1T99Yt_qnoU5dqw5pYoAtlPzEv3Rrjs4xtqhMf08TPmFEDJGxhJ7tPIW-iHalSYkiPYVuqst1OnkxKBIpAxlaa_YtnUlkvaw87eZkADxvHxxCJ9UFImVi1lVcgNCtQG2ILfMJ29rjjJwXKe1--YnmxGKrK">
                </div>
                <h4 class="font-headline-sm text-headline-sm text-primary">Elena Wijaya</h4>
                <p class="font-label-lg text-label-lg text-secondary mt-1">Head of Interior Design</p>
            </div>
            <!-- Team Member 3 -->
            <div class="group cursor-pointer">
                <div class="relative overflow-hidden rounded-xl h-[400px] mb-6 bg-surface">
                    <img alt="Portrait of Director of Engineering" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105" src="https://lh3.googleusercontent.com/aida-public/AB6AXuB0MqQbTwdK_zP1xSzQ2XslrfP4t0Ajjdge3vWRvD3ut0W8Ilix-10b1i1YDxQZH2J7ja0NUQXjqJ-NDXDd_kVUh5PgPzxjJ1Msupx3BE5UvbBNuAxZ7aJxsiPBga7mDK4vclHy8-e8ZVj0p2E6TgrhbPgMQd2_5WwNURlaNLmWomdFK_2adk6EIz3man4M_CPPDuoLaquVi1F_h9OfIYdwXF6RL4Ln9FXXGFvuEuwNZGkE8kI-4BmWrPeIFTo0-spclRpg1_UWwoI5">
                </div>
                <h4 class="font-headline-sm text-headline-sm text-primary">Hendrik Kusuma</h4>
                <p class="font-label-lg text-label-lg text-secondary mt-1">Director of Engineering</p>
            </div>
        </div>
    </section>

    <!-- Achievements & Certifications -->
    <section class="py-section-gap bg-surface border-t border-outline-variant/20">
        <div class="px-margin-mobile md:px-margin-desktop max-w-container-max mx-auto">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-gutter text-center divide-y md:divide-y-0 md:divide-x divide-outline-variant/30">
                <div class="py-8 md:py-0 px-4">
                    <div class="font-headline-xl text-headline-xl text-primary mb-2">15+</div>
                    <div class="font-label-lg text-label-lg text-secondary">Years of Excellence</div>
                </div>
                <div class="py-8 md:py-0 px-4">
                    <div class="font-headline-xl text-headline-xl text-primary mb-2">200+</div>
                    <div class="font-label-lg text-label-lg text-secondary">Projects Delivered</div>
                </div>
                <div class="py-8 md:py-0 px-4">
                    <div class="font-headline-xl text-headline-xl text-primary mb-2">ISO</div>
                    <div class="font-label-lg text-label-lg text-secondary">9001 Certified</div>
                </div>
                <div class="py-8 md:py-0 px-4">
                    <div class="font-headline-xl text-headline-xl text-primary mb-2">12</div>
                    <div class="font-label-lg text-label-lg text-secondary">Design Awards</div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection
