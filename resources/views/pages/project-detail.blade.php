@extends('layouts.app')

@section('title', $project->seo_title ?? $project->title . ' - Cahaya Interior Sejahtera')
@section('meta_description', $project->seo_description ?? $project->short_description)

@section('schema')
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "CreativeWork",
  "name": "{{ $project->title }}",
  "description": "{{ $project->short_description }}",
  "image": "{{ asset($project->featured_image) }}",
  "author": {
    "@type": "Organization",
    "name": "Cahaya Interior Sejahtera"
  },
  "creator": {
    "@type": "Organization",
    "name": "Cahaya Interior Sejahtera"
  },
  "dateCreated": "{{ $project->year }}",
  "locationCreated": {
    "@type": "Place",
    "name": "{{ $project->location }}"
  }
}
</script>
@endsection

@section('content')
<!-- Hero Section -->
<section class="relative h-[600px] md:h-[700px] overflow-hidden">
    <div class="absolute inset-0">
        <img alt="{{ $project->title }}" class="w-full h-full object-cover" src="{{ $project->featured_image }}">
        <div class="absolute inset-0 bg-black/30"></div>
    </div>
    <div class="relative z-10 h-full flex items-end px-margin-mobile md:px-margin-desktop max-w-container-max mx-auto pb-16">
        <div class="max-w-3xl">
            <div class="flex items-center gap-3 mb-4">
                <span class="font-label-md text-label-md text-white uppercase tracking-widest">{{ $project->category }}</span>
                <span class="w-1 h-1 rounded-full bg-white/50"></span>
                <span class="font-label-md text-label-md text-white/80">{{ $project->year }}</span>
            </div>
            <h1 class="font-headline-xl text-headline-xl text-white mb-4">{{ $project->title }}</h1>
            <p class="font-body-lg text-body-lg text-white/90 max-w-2xl">{{ $project->short_description }}</p>
        </div>
    </div>
</section>

<!-- Project Details -->
<section class="py-section-gap px-margin-mobile md:px-margin-desktop max-w-container-max mx-auto">
    <div class="grid grid-cols-1 md:grid-cols-12 gap-gutter">
        <!-- Main Content -->
        <div class="md:col-span-8">
            <div class="prose prose-lg max-w-none">
                {!! $project->description !!}
            </div>
        </div>

        <!-- Sidebar Info -->
        <div class="md:col-span-4">
            <div class="bg-surface-container-lowest p-8 rounded-xl shadow-level-1 sticky top-[100px]">
                <h3 class="font-headline-md text-headline-md text-primary mb-6">Project Details</h3>
                <div class="space-y-6">
                    <div>
                        <p class="font-label-md text-label-md text-secondary mb-1">Location</p>
                        <p class="font-body-md text-body-md text-primary">{{ $project->location }}</p>
                    </div>
                    <div>
                        <p class="font-label-md text-label-md text-secondary mb-1">Category</p>
                        <p class="font-body-md text-body-md text-primary">{{ $project->category }}</p>
                    </div>
                    <div>
                        <p class="font-label-md text-label-md text-secondary mb-1">Year</p>
                        <p class="font-body-md text-body-md text-primary">{{ $project->year }}</p>
                    </div>
                    <div>
                        <p class="font-label-md text-label-md text-secondary mb-1">Scale</p>
                        <p class="font-body-md text-body-md text-primary">{{ $project->scale }}</p>
                    </div>
                </div>
                <div class="mt-8 pt-6 border-t border-outline-variant/30">
                    <a href="{{ route('contact') }}" class="inline-flex items-center gap-2 font-label-lg text-label-lg text-primary border-b border-primary pb-1 hover:opacity-70 transition-opacity">
                        Inquire About This Project <span class="material-symbols-outlined text-[18px]">arrow_forward</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Gallery -->
@if($project->gallery_images && count($project->gallery_images) > 0)
<section class="py-section-gap bg-surface-container-lowest">
    <div class="px-margin-mobile md:px-margin-desktop max-w-container-max mx-auto">
        <h2 class="font-headline-lg text-headline-lg text-primary mb-12">Project Gallery</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-gutter">
            @foreach($project->gallery_images as $image)
            <div class="aspect-[4/3] rounded-xl overflow-hidden shadow-level-1">
                <img alt="{{ $project->title }} gallery image" class="w-full h-full object-cover hover:scale-105 transition-transform duration-500" src="{{ $image }}">
            </div>
            @endforeach
        </div>
    </div>
</section>
@endif

<!-- Related Projects -->
@if($relatedProjects && count($relatedProjects) > 0)
<section class="py-section-gap px-margin-mobile md:px-margin-desktop max-w-container-max mx-auto">
    <div class="flex justify-between items-end mb-12">
        <div>
            <h2 class="font-headline-lg text-headline-lg text-primary mb-2">Related Projects</h2>
            <p class="font-body-md text-body-md text-secondary">More {{ $project->category }} projects</p>
        </div>
        <a href="{{ route('projects', ['category' => $project->category]) }}" class="hidden md:inline-flex items-center gap-2 font-label-lg text-label-lg text-primary hover:opacity-70 transition-opacity">
            View All <span class="material-symbols-outlined text-[18px]">arrow_forward</span>
        </a>
    </div>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-gutter">
        @foreach($relatedProjects as $relatedProject)
        <div class="group cursor-pointer">
            <a href="{{ route('projects.detail', ['slug' => $relatedProject->slug]) }}">
                <div class="relative h-[300px] overflow-hidden rounded-xl mb-4 bg-surface-variant">
                    <img alt="{{ $relatedProject->title }}" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105" src="{{ $relatedProject->featured_image }}">
                </div>
                <h3 class="font-headline-sm text-headline-sm text-primary">{{ $relatedProject->title }}</h3>
                <p class="font-body-sm text-body-sm text-secondary mt-1">{{ $relatedProject->location }} • {{ $relatedProject->year }}</p>
            </a>
        </div>
        @endforeach
    </div>
</section>
@endif

<!-- CTA Section -->
<section class="py-section-gap px-margin-mobile md:px-margin-desktop text-center max-w-3xl mx-auto">
    <h2 class="font-headline-lg text-headline-lg-mobile md:text-headline-lg text-primary mb-6">Inspired by this project?</h2>
    <p class="font-body-lg text-body-lg text-secondary mb-10">
        Schedule a private consultation with our principal designers to discuss your vision.
    </p>
    <a href="{{ route('contact') }}" class="inline-block px-10 py-4 bg-primary text-on-primary rounded-lg font-label-lg text-label-lg hover:bg-inverse-surface transition-colors shadow-level-1">
        Start Your Dream Project Today
    </a>
</section>
@endsection
