<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function index()
    {
        return view('frontend.gallery');
    }
}
