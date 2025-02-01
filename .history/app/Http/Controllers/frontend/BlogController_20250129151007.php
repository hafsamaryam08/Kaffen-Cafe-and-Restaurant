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

    public function submitRecord(Request $request)
    {
        // dd($request);
        
        $request->validate(
            [
                'name' => 'required|min:3',
                'email' => 'required|email',
                'phone' => 'required|min:10',
                'persons' => 'required|in:1 Person,2 Persons,3 Persons,4 Persons',
                'date' => 'required|date',
                'time' => 'required|date_format:H:i'
            ]
        );

        $reservation = new BlogModel();
        $reservation->fullname = $request->name;
        $reservation->email = $request->email;
        $reservation->phone = $request->phone;
        $reservation->persons = $request->persons;
        $reservation->date = $request->date;
        $reservation->time = $request->time;
        $reservation->ip = $request->ip();
        $reservation->status = 0;
        $reservation->save();

        return back()->withInput()->withSuccess("Thanks for your reservation! We'll confirm it shortly.")->withFragment('reservation-form');
    }
}