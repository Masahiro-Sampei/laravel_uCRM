<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class UserSeeder extends Seeder 
{ 
public function run() 
    { 
        DB::table('users')->insert([ 
            'name' => 'test', 
            'email' => 'test@test.com', 
            'password' => Hash::make('password123') 
        ]); 
    } 
}