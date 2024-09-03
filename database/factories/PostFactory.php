<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class PostFactory extends Factory
{
    public function definition(): array
    {
        $title = fake()->title();

        return [
            'title' => $title,
            'slug' => Str::slug($title),
            'quote' => fake()->name(),
            'quote_author' => 1,
            'content' => fake()->name(),
            'image' => fake()->name(),
            'active' => fake()->boolean(),
            'category_id' => Category::factory()->create(),
        ];
    }
}
