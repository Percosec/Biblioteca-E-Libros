<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // $user = new User();
        // $user->name = "admin123";
        // $user->email = "admin@gmail.com";
        // $user->password = Hash::make('admin123');
        // $user->save();

        $user = new User();
        $user->username = "adrian01";
        $user->names = "adrian esteban";
        $user->surnames = "gallo quispe";
        $user->phone = 923910571;
        $user->email = "adriangallo@gmail.com";
        $user->password = Hash::make('adrian01');
        $user->save();
    }
}