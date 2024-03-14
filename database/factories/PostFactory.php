<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    public function definition(): array
    {
        return [
            'title' => fake()->title(),
            'slug' => fake()->slug(),
            'quote' => fake()->name(),
            'quote_author' => 1,
            'content' => fake()->name(),
            'image' => fake()->name(),
            'active' => fake()->boolean(),
            'category_id' => Category::factory()->create(),
        ];
    }
}
