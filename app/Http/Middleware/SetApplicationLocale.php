<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class SetApplicationLocale
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $locale = $request->segment(1) ?? session('locale', 'id');
        
        if (!in_array($locale, ['en', 'id'])) {
            $locale = 'id';
        }
        
        app()->setLocale($locale);
        session(['locale' => $locale]);
        
        // Set default locale parameter for route generation
        \Illuminate\Support\Facades\URL::defaults(['locale' => $locale]);
        
        return $next($request);
    }
}
