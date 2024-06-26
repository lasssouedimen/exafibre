<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('users')->insert([
            'name'=>'test',
            'email' => 'test@example.com',
            'password' => Hash::make('12345678'),
            'role'=>'0',
        ]);
        DB::table('users')->insert([
            'name'=>'imen',
            'email' => 'imenimen@gmail.com',
            'password' => Hash::make('imen1999'),
            'role'=>'1',
        ]);
    }
}