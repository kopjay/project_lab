<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'name' => 'admin',
                'email' => 'admin@gmail.com',
                'password' => bcrypt('12345678'),
                'gender' => 'Male',
                'birth' => '1999-01-01',
                'country' => 'Indonesia',
                'role' => 1,
            ],
            [
                'name' => 'Zainal Mutaqin',
                'email' => 'zainal@gmail.com',
                'password' => bcrypt('12345678'),
                'gender' => 'Male',
                'birth' => '1900-01-01',
                'country' => 'Indonesia',
                'role' => 0,
            ],

        ]);
    }
}
