<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\PostModel;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PostModel::create([
            "user_id" => 1,
            "title" => "My first post",
            "body" => "This is the first post made by the administrator. I dont know what write more to fill more space in this post.",
            "footer" => "This is the foooter content"
        ]);
    }
}
