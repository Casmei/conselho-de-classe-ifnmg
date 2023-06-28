<?php

namespace Database\Seeders;

use App\Models\Classe;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $classe = Classe::find(1)->first();

        DB::table('students')->insert([
            [
                'id' => 1,
                'name' => 'Tiago de Castro Lima',
                'class_id' => $classe->id,
                'photo_url' => 'https://avatars.githubusercontent.com/u/68354933?v=4',
                'registration' => '34254324',
                'contract' => '2342352552'
            ]
        ]);
    }
}

