<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        return view('index');
    }

    public function about(){
        return view('about');
    }
    
    public function blog(){
        return view('blog');
    }

    public function contact(){
        return view('contact');
    }


    public function courseDetail(){
        return view('course-details');
    }

    public function course(){
        return view('course');
    }

    public function elements(){
        return view('elements');
    }

    public function singleBlog(){
        return view('single-blog');
    }
}
