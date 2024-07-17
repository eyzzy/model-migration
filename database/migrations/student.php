<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
class StudentFactory extends factory
    {

    public function definition(): array
        {
            return [
                'fname' =>fake()->firstname(),
                'lname' =>fake()->lastname(),
                'email' =>fake()->unique(),safeEmail(),
                'phone' =>fake()->PhoneNumber(),
                'address' =>fake()->firstname(),
                'city' =>fake()->firstname(),
                'province' =>fake()->firstname(),
                'zip' =>fake()->zip(),
                'birthdate' =>fake()->dateTimeBetween('2000-01-01', '2010-12-30')->format('Y-m-d'),






            ];
        }



    }