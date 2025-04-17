<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\Service;

class ProjectsController extends Controller
{
    
    public function index(Request $request)
    {
        $tagSlug = $request->query('tag'); // ini diasumsikan sebagai ID dari service
        $services = Service::select('id', 'title')->get();
    
        // Mulai query
        $query = Project::with('services');
    
        if ($tagSlug) {
            // Filter berdasarkan ID service yang dipilih
            $query->whereHas('services', function ($q) use ($tagSlug) {
                $q->where('services.id', $tagSlug); 

            });
        }
    
        $projects = $query->latest()->get();
    
        return view('projects', compact('projects', 'services', 'tagSlug'));
    }
}
