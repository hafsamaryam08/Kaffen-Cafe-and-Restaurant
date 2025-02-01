<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        return view('frontend.blog');
    }

    public function blogGrid()
    {
        return view('frontend.blog-grid');
    }

    public function blogSingle()
    {
        return view('frontend.blog-single'); 
    }
}