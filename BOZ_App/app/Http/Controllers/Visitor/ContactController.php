<?php

namespace App\Http\Controllers\Visitor;

use App\Http\Controllers\Controller;
use App\Mail\ContactMail;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact.index')->with(['success' => \request()['success'] ?? null]);
    }

    public function storeAndSendContactForm(Request $request)
    {
        $request->validate([
            'fullname' => "required|min:2",
            'email' => "required|email",
            'message' => "required|string|min:1"
        ]);

        $contact = new Contact([
            'fullname' => $request->fullname,
            'email' => $request->email,
            'message' => $request->message
        ]);

        $contact->save();
        Mail::to(env('MAIL_FROM_ADDRESS'))->send(new ContactMail($contact));

        return redirect()->route('contact.visitor.index', ['success' => __('Contact sent successfully')]);
    }
}
