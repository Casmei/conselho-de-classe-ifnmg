<?php

namespace Database\Seeders;

use App\Enums\UserRole;
use App\Models\Classe;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClassToTeacherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('classes_to_teacher')->insert([
            'id' => 1,
            'class_id' => 1,
            'user_id' => 2
        ]);
    }
}
