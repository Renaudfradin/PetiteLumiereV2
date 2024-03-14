<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;

class LegendsFactory extends Factory
{
    public function definition(): array
    {
        return [
            'title' => fake()->title(),
            'slug' => fake()->slug(),
            'content' => fake()->name(),
            'post_id' => Post::factory()->create(),
            'image' => fake()->name(),
            'url' => fake()->name(),
            'active' => fake()->boolean(),
        ];
    }
}
