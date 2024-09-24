<?php

namespace Database\Factories;

use App\Models\Contact;
use Illuminate\Database\Eloquent\Factories\Factory;

class ContactFactory extends Factory
{

    protected $model = Contact::class;

    public function definition()
    {
        return [
            'name'          => fake()->name,
            'user_id'       => 1,
            'story'         => fake()->text,
            'phone'         => fake()->phoneNumber(),
        ];
    }

}
