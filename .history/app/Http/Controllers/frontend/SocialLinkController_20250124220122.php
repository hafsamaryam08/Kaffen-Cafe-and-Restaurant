<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\SocialLink;
use App\Models\SocialLinksModel;

class SocialLinkController extends Controller
{
    public function index()
    {
        $socialLinks = SocialLinksModel::all();

        return view('frontend.layouts.header', compact('socialLinks'));
    }
}
