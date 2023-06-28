<?php

namespace Database\Seeders;

use App\Enums\UserRole;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'id' => 1,
                'name' => 'admin',
                'email' => 'admin@admin',
                'password' => Hash::make('admin'),
                'role_id' => UserRole::ADMIN,
            ],
            [
                'id' => 2,
                'name' => 'pedro',
                'email' => 'pedro@pedro',
                'password' => Hash::make('pedro'),
                'role_id' => UserRole::PROFESSOR,
            ]

        ]);
    }
}
