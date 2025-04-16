<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pages;
use App\Models\Section;
class AboutController extends Controller
{
    public function index(){
        $page = Pages::where('page_name','about')->firstOrFail();
        $story_section = Section::where('page_id',2)->where('name','story')->first();
        $vision_section = Section::where('page_id',2)->where('name','vision')->first();
        $mission_section = Section::where('page_id',2)->where('name','mission')->first();


        return view('about',compact('page','story_section','vision_section','mission_section'));
    }

}
