<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Feedback;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            RoleSeeder::class,
            UserSeeder::class,
            CourseSeeder::class,
            ClasseSeeder::class,
            ClassToTeacherSeeder::class,
            StudentSeeder::class,
            SubjectSeeder::class,
            ClassCouncilsSeeder::class,
            FeedbackSeeder::class,
            SubjectToTeacherSeeder::class
        ]);
    }
}
