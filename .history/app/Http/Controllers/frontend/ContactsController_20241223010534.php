<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\frontend\ContactModel;
use Illuminate\Http\Request;

class ContactsController extends Controller
{
    public function index()
    {
        return view('contacts');
    }

    public function submitRecord(Request $request)
    {
        $FullName = $request->name;
        $Email = $request->email;
        $Phone = $request->phone;
        $Subject = $request->subject;
        $Message = $request->message;
        $IP = $request->ip();

        // dd($request);
    }
}
