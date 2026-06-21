<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        return view('frontend.home');
    }
    public function about()
    {
        return view('frontend.about');
    }

    public function blog()
    {
        return view('frontend.blog');
    }
    public function blog_single()
    {
        return view('frontend.blog_single');
    }
    public function contact()
    {
        return view('frontend.contact');
    }
    public function instructor()
    {
        return view('frontend.instructor');
    }
    public function course()
    {
        return view('frontend.course');
    }
    public function course_details()
    {
        return view('frontend.course_details');
    }
}
