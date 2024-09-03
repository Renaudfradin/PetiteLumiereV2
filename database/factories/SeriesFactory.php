<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class SeriesFactory extends Factory
{
    public function definition(): array
    {
        $title = fake()->title();

        return [
            'title' => $title,
            'slug' => Str::slug($title),
            'posts_id' => Post::factory(),
            'description' => fake()->name(),
        ];
    }
}
