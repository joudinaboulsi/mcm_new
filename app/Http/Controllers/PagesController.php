<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    
    //Home Page
    public function home(){
        return view('pages.home');
    }

    
    //About Page
    public function about(){
        return view('pages.about');
    }

    
    
    
    // Projects Page
    public function projects(){
        return view('pages.projects');
    }


    // Project Detail Page
      public function projectDetails(){
        return view('pages.project_detail');
    }



    // Our Fleets Page
    public function fleets(){
        return view('pages.fleets');
    }

    // Careers Page
    public function career(){
    return view('pages.career');
    }

    // E-Booking Page
     public function booking(){
        return view('pages.booking');
    }

    // Contact Page
    public function contact(){
    return view('pages.contact');
}
}
