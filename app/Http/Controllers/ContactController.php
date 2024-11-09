<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function contactsend(Request $request)
    {
        // Validate the form input
        $request->validate([
            'name' => 'required|string|max:255',
            'number' => 'required|digits_between:10,14',  // Assuming phone number has 10 to 14 digits
            'type' => 'required|string|max:255',
            'message' => 'required|string|max:1200',
        ]);

        try {
            // Send email
            Mail::to('ahasan.jobs@gmail.com')->send(new ContactMail($request->all()));

            return redirect()->back()->with('success', 'Message sent successfully.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Error: ' . $e->getMessage());
        }
    }

}