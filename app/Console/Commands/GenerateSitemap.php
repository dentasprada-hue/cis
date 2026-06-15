<?php

namespace App\Console\Commands;

use App\Models\Project;
use Carbon\Carbon;
use Illuminate\Console\Command;
use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\Tags\Url;

class GenerateSitemap extends Command
{
    protected $signature = 'sitemap:generate';

    protected $description = 'Generate sitemap.xml to public directory using spatie/laravel-sitemap';

    public function handle()
    {
        $sitemap = Sitemap::create();

        $staticPages = [
            ['route' => 'home',     'priority' => 1.0, 'changefreq' => Url::CHANGE_FREQUENCY_DAILY],
            ['route' => 'about',    'priority' => 0.8, 'changefreq' => Url::CHANGE_FREQUENCY_MONTHLY],
            ['route' => 'projects', 'priority' => 0.9, 'changefreq' => Url::CHANGE_FREQUENCY_WEEKLY],
            ['route' => 'contact',  'priority' => 0.7, 'changefreq' => Url::CHANGE_FREQUENCY_MONTHLY],
        ];

        $today = Carbon::now()->startOfDay();
        $locales = ['id', 'en'];

        foreach ($staticPages as $page) {
            foreach ($locales as $locale) {
                $url = Url::create(route($page['route'], ['locale' => $locale]))
                    ->setLastModificationDate($today)
                    ->setChangeFrequency($page['changefreq'])
                    ->setPriority($page['priority']);

                foreach ($locales as $altLocale) {
                    $url->addAlternate(
                        route($page['route'], ['locale' => $altLocale]),
                        $altLocale
                    );
                }

                $sitemap->add($url);
            }
        }

        try {
            $projects = Project::orderBy('updated_at', 'desc')->get();
        } catch (\Throwable $e) {
            $projects = collect();
            $this->warn('Database unavailable: ' . $e->getMessage());
        }

        foreach ($projects as $project) {
            $lastmod = $project->updated_at ?? $today;

            foreach ($locales as $locale) {
                $url = Url::create(route('projects.detail', [
                    'locale' => $locale,
                    'slug' => $project->slug,
                ]))
                    ->setLastModificationDate($lastmod)
                    ->setChangeFrequency(Url::CHANGE_FREQUENCY_WEEKLY)
                    ->setPriority(0.8);

                foreach ($locales as $altLocale) {
                    $url->addAlternate(
                        route('projects.detail', [
                            'locale' => $altLocale,
                            'slug' => $project->slug,
                        ]),
                        $altLocale
                    );
                }

                $sitemap->add($url);
            }
        }

        $sitemap->writeToFile(public_path('sitemap.xml'));

        $total = count($staticPages) * count($locales) + $projects->count() * count($locales);

        $this->info("Sitemap generated successfully! ({$total} URLs)");
    }
}
