<?php

namespace App\Http\Controllers;

use App\Mail\MarkdownContactFormMail;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function show_contact_page()
    {
        return view('guest.contacts.form');
    }

    public function store(Request $request)
    {
        //validazione
        $valData = $request->validate([
            'name' => 'required|min:4|max:50',
            'email' => 'required|email',
            'message' => 'required|min:20|max:500'
        ]);

        //ddd($valData); //Array


        //Mail::to('admin@example.com')->send(new ContactFormMail($valData));

        //creare la risorsa
        $contact = Contact::create($valData);

        $this->sendEmail($contact);


        /* Usando il markdown */
        //return (new MarkdownContactFormMail($valData))->render();

        return redirect()->back()->with('message', 'Thx for the message buddy, fukoff');
    }

    public function sendEmail(Contact $contact)
    {
        Mail::to('admin@example.com')->send(new MarkdownContactFormMail($contact));
    }
}
