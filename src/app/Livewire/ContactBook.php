<?php

namespace App\Livewire;

use App\Models\Contact;
use Illuminate\Support\Facades\Log;
use Livewire\Component;

class ContactBook extends Component
{
    public string $search = '';


    public function render(): \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory|\Illuminate\Foundation\Application
    {

        $contacts = [];

        if (!empty($this->search)) {
            $contacts = Contact::query()->where('name', 'like', '%' . $this->search . '%')->get();
        }
        return view('livewire.contact-book', [
            'contacts' => $contacts,
        ]);
    }
}
