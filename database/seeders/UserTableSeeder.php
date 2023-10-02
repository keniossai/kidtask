<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userRecords = [
            [
                'id'=>1,
                'user_id'=>1,
                'name'=>'Kenneth Ossai',
                'email'=>'kenossai1@gmail.com',
                'password'=>Hash::make('123456'),
                'email_verified_at' => now(),
                'remember_token' => Str::random(10),
            ],
            [
                'id'=>2,
                'user_id'=>2,
                'name'=>'Maya Julian',
                'email'=>'maya@gmail.com',
                'password'=>Hash::make('123456'),
                'email_verified_at' => now(),
                'remember_token' => Str::random(10),
            ],
            [
                'id'=>3,
                'user_id'=>3,
                'name'=>'Mary Jacob',
                'email'=>'mary@gmail.com',
                'password'=>Hash::make('123456'),
                'email_verified_at' => now(),
                'remember_token' => Str::random(10),
            ],
        ];
        User::insert($userRecords);
    }
}
