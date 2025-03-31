<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Mail\ContactMail;

class ContactController extends Controller
{
    public function sendEmail(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'telephone' => 'nullable',
            'subject' => 'required',
            'message' => 'required',
        ]);
        
        $details = [
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->telephone,
            'subject' => $request->subject,
            'message' => $request->message
        ];
        
        Mail::to('patrick8200402@gmail.com')->send(new ContactMail($details));
        
        return response()->json(['success' => 'Your message has been sent. Thank you!']);
    }
}