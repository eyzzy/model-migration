<?php

namespace Database\Seeders;

use App\Models\Student;
use App\Models\User;
use App\Models\StudentController;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        Student::factory()
            ->count(30)
            ->create();
          

    }
}


