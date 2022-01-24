<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'first_name' => "John",
            'last_name' => "Doe",
            'title' => "Dr",
            'email' => "jdoe@su.ke",
            'password' => Hash::make('12345678'),
            'role' => 3,
            'gender' => 0,
            'specialization' => "GIS",
            'isAdmin' => 1
        ]);
    }
}
