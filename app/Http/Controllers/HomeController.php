<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Banner;
use App\Models\Branch;
use App\Models\BlogVideo;
use App\Models\SuccessStory;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        return view('backend.pages.dashboard');
    }

    public function front_index()
    {
        // dd(headline());
        $aboutUs = About::select('title', 'sub_title', 'short_description', 'description', 'about_course_desc')->first();
        $blogVideos = BlogVideo::select('title', 'description', 'url')->latest()->take(4)->get();
        $sliders = Banner::select('title', 'small_title', 'image_url')->latest()->get();
        
        $successStories = SuccessStory::latest()->take(8)->get();
        return view('frontend.pages.index', compact('aboutUs', 'blogVideos', 'sliders', 'successStories'));
    }


    public function about()
    {
        $aboutUs = About::select('title', 'sub_title', 'short_description', 'description', 'about_course_desc')->first();
        return view('frontend.pages.about', compact('aboutUs'));
    }
    public function blog()
    {
        $blogVideos = BlogVideo::select('title', 'description', 'url')->latest()->get();
        return view('frontend.pages.blog', compact('blogVideos'));
    }
    public function contact()
    {
        return view('frontend.pages.contact');
    }

  

  
    //branches
    public function branches()
    {
        $branches = Branch::latest()->get();
        // dd($branches);
        return view('frontend.pages.branches', compact('branches'));
    }


    public function register()
    {
        return view('frontend.pages.register');
    }


    //success stories
    public function successStories()
    {
        $successStories = SuccessStory::latest()->get();
        return view('frontend.pages.success-stories', compact('successStories'));
    }
}
