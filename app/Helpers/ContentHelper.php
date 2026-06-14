<?php

namespace App\Helpers;

use App\Models\PageContent;
use Illuminate\Support\Facades\App;

class ContentHelper
{
    public static function getPageContent(string $pageName, string $key, ?string $locale = null)
    {
        $locale = $locale ?? App::getLocale();

        $content = PageContent::where('page_name', $pageName)
            ->where('key', $key)
            ->where('locale', $locale)
            ->first();

        if (!$content) {
            // Fallback to default locale if content not found for current locale
            // Assuming 'en' is the fallback locale as per config/app.php
            if ($locale !== config('app.fallback_locale')) {
                $content = PageContent::where('page_name', $pageName)
                    ->where('key', $key)
                    ->where('locale', config('app.fallback_locale'))
                    ->first();
            }
        }

        if ($content) {
            if ($content->type === 'text') {
                return $content->value;
            } elseif ($content->type === 'image') {
                // Return the URL of the first media item, or null if none
                return $content->getFirstMediaUrl('page-images') ?: null;
            }
        }

        return null; // Return null if content not found or type is unexpected
    }
}
