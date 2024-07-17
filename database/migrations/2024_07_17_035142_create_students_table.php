<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
                'fname' =>fake()->firstname(),
                'lname' =>fake()->lastname(),
                'email' =>fake()->unique(),safeEmail(),
                'phone' =>fake()->PhoneNumber(),
                'address' =>fake()->firstname(),
                'city' =>fake()->firstname(),
                'province' =>fake()->firstname(),
                'zip' =>fake()->zip(),
                'birthdate' =>fake()->dateTimeBetween('2000-01-01', '2010-12-30')->format('Y-m-d'),

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
