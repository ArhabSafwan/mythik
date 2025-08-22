<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => '3devs IT Ltd',
            'user_name' => '3-devs',
            'email' => 'info@3-devs.com',
            'password' => Hash::make('123456'),
            'role_id' => 1,
            'user_type' => 2,
            'status' => 1,
            'slug' => Str::slug('3devs IT Ltd'), // Adding slug
        ]);
        
        // Normal User
        User::create([
            'name' => 'Innovation',
            'user_name' => 'innovation',
            'email' => 'info@brac.net',
            'password' => Hash::make('innovation'),
            'role_id' => 1,
            'user_type' => 2,
            'status' => 1,
            'slug' => Str::slug('Innovation'), // Adding slug
        ]);
    }
}
