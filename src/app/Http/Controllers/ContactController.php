<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{

    public function contact(Contact $contact)
    {
        return view('page.contact', [
            'contact' => $contact,
            'user' => auth()->user()
        ]);
    }

    public function contactFormShow()
    {
        return view('page.contactform', [
            'user' => auth()->user()
        ]);
    }

    public function contactFormCreate(Request $request)
    {
        $data = [
            'user_id'   => auth()->user()->id,
            "name"      => $request->get('name'),
            "phone"     => $request->get('phone'),
            "story"     => $request->get('story'),
        ];
        $contact = Contact::query()->create($data);
        return redirect()->route('contact',
            [
                'contact' => $contact,
                'user' => auth()->user()
            ]);
    }

    public function contactDelete(Contact $contact)
    {
        $contact->find($contact->id)->delete();
        return redirect()->route('contacts');
    }

    public function contactEditShow(Contact $contact)
    {
        return view('page.contacteditshow', [
            'contact' => $contact,
            'user' => auth()->user()
        ]);

    }
    public function contactEdit(Request $request, Contact $contact)
    {
        $data = [
            "name"      => $request->get('name'),
            "phone"     => $request->get('phone'),
            "story"     => $request->get('story'),
        ];
        $contact->find($contact->id)->update($data);
        return redirect()->route('contact', [
            'contact' => $contact]);
    }
}
