<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Legends;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        User::factory()->count(10)->create();
        Post::factory()->count(100)->has(Legends::factory()->count(20), 'legends')->create();
        Category::factory()->count(50)->has(Post::factory()->count(10))->create();
    }
}
