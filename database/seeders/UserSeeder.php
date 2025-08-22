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
            'name' => 'Mythik',
            'user_name' => 'mythik',
            'email' => 'info@mythik.com',
            'password' => Hash::make('123456'),
            'role_id' => 1,
            'user_type' => 2,
            'status' => 1,
            'slug' => Str::slug('Mythik'), // Adding slug
        ]);

        // Normal User
        User::create([
            'name' => 'Arhab Safwan',
            'user_name' => 'arhab',
            'email' => 'asafwan72@gmail.com',
            'password' => Hash::make('innovation'),
            'role_id' => 1,
            'user_type' => 2,
            'status' => 1,
            'slug' => Str::slug('Arhab Safwan'), // Adding slug
        ]);
    }
}
