<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\SocialLinksModel;
use Illuminate\Http\Request;

class SocialController extends Controller
{
    public function show($platform)
    {
        // Fetch the content for the requested platform
        $socialLink = SocialLinksModel::where('platform', $platform)->firstOrFail();

        // Pass the content dynamically to the respective blade file
        return view("frontend.{$platform}", ['content' => $socialLink->content]);
    }
}
