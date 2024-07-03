<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Project;
use Carbon\Carbon;
use Illuminate\Support\Facades\Cache;

class ProjectController extends Controller
{
   

    public function index()
{
    $categories = Project::pluck('category')->unique();
   

    return view(
        'projects.index',
        [
            'categories' => $categories,
        ]
    );
}


  
    /**
     * Display the specified resource.
     */
    public function show(Project $project)
    {
        return view(
            'projects.show',
            [
                'project' => $project,
            ]
        );
    }

}
