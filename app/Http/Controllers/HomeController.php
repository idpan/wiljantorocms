<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pages;
use App\Models\Section;

use App\Models\Services;
use App\Models\Projects;

class HomeController extends Controller
{
    public function index(){
        $page = Pages::where('page_name','home')->firstOrFail();
        $about_section = Section::where('page_id',1)->where('name','about')->first();
        $services_section = Section::where('page_id',1)->where('name','services')->first();
        $featured_projects_section = Section::where('page_id',1)->where('name','featured_projects')->first();
        $services = Services::all();
        $featured_projects = Projects::latest()->limit(5)->get();

        return view('home', compact(
            'page',
            'about_section',
            'services_section',
            'featured_projects_section',
            'services',
            'featured_projects'
        ));
    }
}
