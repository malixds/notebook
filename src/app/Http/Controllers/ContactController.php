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
}
