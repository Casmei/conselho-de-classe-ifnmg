<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SubjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('subjects')->insert([
            ['name' => 'Português', 'id' => 1],
            ['name' => 'Mátematica', 'id' => 2],
            ['name' => 'Ciências', 'id' => 3],
        ]);
    }
}
