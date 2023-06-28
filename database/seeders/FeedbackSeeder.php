<?php

namespace Database\Seeders;

use App\Enums\UserRole;
use App\Models\ClassCouncil;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FeedbackSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $classCouncil = ClassCouncil::find(1)->first();
        $teacher = User::where('role_id', UserRole::PROFESSOR)->first();
        $student = User::find(1)->first();



        DB::table('feedbacks')->insert([
            [
                'id' => 1,
                'class_council_id' => $classCouncil->id,
                'content' => 'Bom aluno',
                'visibility' => 1,
                'user_id' => $teacher->id,
                'student_id' => $student->id
            ]
        ]);
    }
}

