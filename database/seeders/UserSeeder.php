<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\UserModel;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        UserModel::create([
            "name" => "Administrator",
            "email" => "admin@gmail.com",
            "password" => Hash::make(env("ADMIN_PASSWORD")),
            "email_verified_at" => date("Y-m-d H:i:s")
        ]);
    }
}