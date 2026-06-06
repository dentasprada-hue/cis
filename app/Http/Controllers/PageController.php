<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class PageController extends Controller
{
    /**
     * Display the Home page.
     */
    public function home()
    {
        $featuredProjects = Project::where('is_featured', true)->take(2)->get();
        return view('pages.home', compact('featuredProjects'));
    }

    /**
     * Display the About page.
     */
    public function about()
    {
        return view('pages.about');
    }

    /**
     * Display the Projects page with filtering.
     */
    public function projects(Request $request)
    {
        $category = $request->query('category');
        
        $query = Project::query();
        
        if ($category && in_array($category, ['Residential', 'Commercial', 'Office', 'Hospitality'])) {
            $query->where('category', $category);
        }
        
        $projects = $query->orderBy('year', 'desc')->get();
        $featuredProject = Project::where('is_featured', true)->first();

        return view('pages.projects', compact('projects', 'featuredProject', 'category'));
    }

    /**
     * Display a single Project Detail page.
     */
    public function projectDetail($slug)
    {
        $project = Project::where('slug', $slug)->firstOrFail();
        // Fetch related projects (same category, excluding current)
        $relatedProjects = Project::where('category', $project->category)
            ->where('id', '!=', $project->id)
            ->take(3)
            ->get();

        return view('pages.project-detail', compact('project', 'relatedProjects'));
    }

    /**
     * Display the Contact page.
     */
    public function contact()
    {
        return view('pages.contact');
    }

    /**
     * Handle Contact form submission.
     */
    public function submitContact(Request $request)
    {
        $validated = $request->validate([
            'firstName' => 'required|string|max:50',
            'lastName' => 'required|string|max:50',
            'email' => 'required|email|max:100',
            'subject' => 'required|string|max:150',
            'message' => 'required|string|max:2000',
        ]);

        // In a real application, you might save this to a database, send an email, etc.
        // For now, we redirect back with a success status.
        return redirect()->back()->with('success', 'Thank you for your inquiry. Our design consultants will get in touch with you shortly.');
    }
}
