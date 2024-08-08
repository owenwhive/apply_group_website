<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //

    public function index(){

        return view('pages.index');
    }

    public function recruitment(){
        return view('pages.recruitment');

    }

    public function institution(){
        return view('pages.institution');

    }

    public function courses(){
        return view('pages.courses');

    }


    public function programOnboard(){
        return view('pages.program_onboard');

    }


    
}
