<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Page;
use App\Models\Section;
use App\Models\Service;
use App\Models\Project;
class HomeController extends Controller
{
    public function index(){
        $page = Page::where('name','home')->firstOrFail();
        $about_section = Section::where('page_id',$page->id)->where('name','about')->firstOrFail();
        $services_section = Section::where('page_id',$page->id)->where('name','services')->first();
        $featured_projects_section = Section::where('page_id',1)->where('name','featured_projects')->first();
        $contact_section = Section::where('page_id',$page->id)->where('name','contact')->first();
        $services = Service::all();
        $featured_projects = Project::latest()->limit(5)->get();

        return view('home'
        , compact(
            'page',
            'about_section',
            'services_section',
            'featured_projects_section',
            'services',
            'featured_projects'
        )
    );
    }
}