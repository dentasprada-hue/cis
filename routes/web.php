<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\SeoController;
use App\Http\Middleware\SetApplicationLocale;

// Technical SEO Endpoints (outside locale prefix — must be above catch-all)
Route::get('/sitemap.xml', [SeoController::class, 'sitemap'])->name('seo.sitemap');
Route::get('/robots.txt', [SeoController::class, 'robots'])->name('seo.robots');

// Language-prefixed routes
Route::prefix('{locale}')->middleware(SetApplicationLocale::class)->group(function () {
    Route::get('/', [PageController::class, 'home'])->name('home');
    Route::get('/about', [PageController::class, 'about'])->name('about');
    Route::get('/projects', [PageController::class, 'projects'])->name('projects');
    Route::get('/projects/{slug}', [PageController::class, 'projectDetail'])->name('projects.detail');
    Route::get('/contact', [PageController::class, 'contact'])->name('contact');
    Route::post('/contact', [PageController::class, 'submitContact'])->name('contact.submit');
});

// Redirect root to English
Route::get('/', function () {
    return redirect('/en');
});
