<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //

    public function indexPage(){
        return view('pages.index');
    }

    public function aboutPage(){
        return view('pages.about');
    }

    public function portfolioPage(){
        return view('pages.portfolio');
    }

    public function blogPage(){
        return view('pages.blog');
    }

    public function contactPage(){
        return view('pages.contact');
    }
}
