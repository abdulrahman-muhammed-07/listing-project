<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{

    public function run(): void
    {
        User::insert([
            [
                'name' => 'Super Admin',
                'email' => 'admin@admin.com',
                'password' => Hash::make('password'),
                'user_type' => 'admin'
            ],
            [
                'name' => 'user',
                'email' => 'user@user.com',
                'password' => Hash::make('password'),
                'user_type' => 'user'
            ]
        ]);
    }
}
