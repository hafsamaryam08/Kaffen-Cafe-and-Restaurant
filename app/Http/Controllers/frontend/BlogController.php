<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\frontend\BlogModel;
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

    public function submitRecord(Request $request)
    {
        $request->validate([
            'name' => 'required|min:3',
            'email' => 'required|email',
            'comment' => 'required|min:10',
        ]);
    
        $comment = new BlogModel();
        $comment->name = $request->name;
        $comment->email = $request->email;
        $comment->comment = $request->comment;
        $comment->save();
    
        return back()->withSuccess("Your comment has been submitted successfully!");
    }
}