<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function index()
    {
        return view('frontend.menu');
    }

    public function restaurantMenu()
    {
        return view('frontend.menu-restaurant'); 
    }
}