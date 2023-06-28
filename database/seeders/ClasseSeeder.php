<?php

namespace Database\Seeders;

use App\Models\Course;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClasseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $course = Course::find(1)->first();

        DB::table('classes')->insert([
            ['name' => 'ADS123', 'course_id' => $course->id  ,'id' => 1]
        ]);
    }
}
