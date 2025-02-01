<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\frontend\ContactModel;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact');
    }

    public function submitRecord(Request $request)
    {
        // dd($request);

        $request->validate(
            [
                'name' => 'required|min:3',
                'email' => 'required|email',
                'phone' => 'required|min:10',
                'subject' => 'required',
                'message' => 'required|min:20'
            ]
        );
        $FullName = $request->name;
        $Email = $request->email;
        $Phone = $request->phone;
        $Subject = $request->subject;
        $Message = $request->message;
        $IP = $request->ip();
        $Status = 0;

        $contact = new ContactModel();
        $contact->fullname = $FullName;
        $contact->email = $Email;
        $contact->phone = $Phone;
        $contact->subject = $Subject;
        $contact->message = $Message ;
        $contact->ip = $IP;
        $contact->status = $Status;
        $contact->save();
        return back()->withSuccess('Thanks for contacting.');

    }
}