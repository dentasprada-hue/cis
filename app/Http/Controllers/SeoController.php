<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Response;

class SeoController extends Controller
{
    /**
     * Generate dynamic sitemap.xml.
     */
    public function sitemap(): Response
    {
        $projects = Project::orderBy('updated_at', 'desc')->get();
        
        $xml = view('seo.sitemap', compact('projects'))->render();
        
        return response($xml, 200)
            ->header('Content-Type', 'text/xml');
    }

    /**
     * Generate dynamic robots.txt.
     */
    public function robots(): Response
    {
        $sitemapUrl = url('sitemap.xml');
        
        $content = "User-agent: *\n";
        $content .= "Allow: /\n\n";
        $content .= "Sitemap: {$sitemapUrl}\n";
        
        return response($content, 200)
            ->header('Content-Type', 'text/plain');
    }
}
