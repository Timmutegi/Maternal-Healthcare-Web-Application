<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        return view('pages.index');
    }

    public function about(){
        return view('pages.about');
    }

    public function immunization(){
        return view('pages.immunization');
    }

    public function analytics(){
        return view('pages.analytics');
    }

    public function profile(){
        return view('pages.profile');   
    }
}
