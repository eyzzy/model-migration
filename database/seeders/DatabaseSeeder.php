<?php

namespace Database\Seeders;

use App\Models\Student;
use App\Models\User;
use App\Models\SubjectGrade;
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

        StudentController::factory()
            ->count(50)
            ->hasPosts(1)
            ->create();
          

    }
}


