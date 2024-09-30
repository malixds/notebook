<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Http\Request;

class UserController extends Controller
{


    public function contacts()
    {
        $contacts = auth()->user()->contacts()->get();
        return view('page.contacts', [
            'contacts' => $contacts,
            'user' => auth()->user()
        ]);
    }
}
