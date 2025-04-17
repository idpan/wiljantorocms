<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Page;
use App\Models\ContactPhone;
use App\Models\ContactEmail;
use App\Models\SocialMedia;

class ContactController extends Controller
{
    public function index(){
        $phone = ContactPhone::all();
        $email = ContactEmail::all();
        $social_media = SocialMedia::all();
       
          return view('contact'
          , 
          compact(
        'phone',    
        'email',
        'social_media'
          )
            // return view('contact');
    );
    // return echo( 'haello');
    }
    // public function index() {
        //     return view('contact');
    // }
    
}
