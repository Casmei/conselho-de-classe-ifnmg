<?php

namespace Database\Seeders;

use App\Enums\UserRole;
use App\Models\Subject;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SubjectToTeacherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $subject = Subject::find(1)->first();
        $teacher = User::where('role_id', UserRole::PROFESSOR)->first();

        DB::table('subject_to_teacher')->insert([
            ['id' => 1, 'subject_id' => $subject->id, 'user_id' => $teacher->id]
        ]);

    }
}
