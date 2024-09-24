<?php

namespace Database\Seeders;

use App\Models\Contact;

class ContactSeeder
{
    public function run(): void
    {
        Contact::factory()->count(10)->create();;
    }
}
