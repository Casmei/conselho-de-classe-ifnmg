<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ClassCouncilsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('class_councils')->insert([
            [
                'id' => 1,
                'name' => 'Conselho Abril 2023',
                'start_date' => Carbon::create(2023, 4, 17, 0, 0, 0, 'America/Toronto')->toDateString()
            ]
        ]);

        DB::table('class_councils')->insert([
            [
                'id' => 2,
                'name' => 'Conselho Julho 2023',
                'start_date' => Carbon::create(2023, 7, 15, 0, 0, 0, 'America/Toronto')->toDateString()
            ]
        ]);

        DB::table('class_councils')->insert([
            [
                'id' => 3,
                'name' => 'Conselho Setembro 2023',
                'start_date' => Carbon::create(2023, 9, 23, 0, 0, 0, 'America/Toronto')->toDateString()
            ]
        ]);
    }
}
