<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Cache;

class HomeController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    
    {

        $featuredProjects = Project::where('status', true)
        ->where('featured', true)
        ->latest('published_at')
        ->take(20)
        ->get();
    
        $nonFeaturedProjects = Project::where('status', true)
        ->where('featured', false)
        ->latest('published_at')
        ->take(100 - $featuredProjects->count())
        ->get();

        $projects = $featuredProjects->merge($nonFeaturedProjects);

        return view('home', [
            'featuredProjects' => $projects,

            // 'featuredProjects' => Project::where('status', true)->where('featured',true)->latest('published_at')->take(10)->get(),
            // 'allProjects' => Project::where('status', true)->where('featured',false)->latest('published_at')->take(20)->get(),

        ]);
    }
}
