<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('courses')->insert([
            ['name' => 'Análise e Desenvolvimento de Sistemas', 'id' => 1],
            ['name' => 'Processos Gerenciais', 'id' => 2],
            ['name' => 'Informática', 'id' => 3],
        ]);
    }
}
