<?php

namespace Database\Factories;

use App\Models\Series;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class LegendsFactory extends Factory
{
    public function definition(): array
    {
        $title = fake()->title();

        return [
            'title' => $title,
            'slug' => Str::slug($title),
            'content' => fake()->name(),
            'series_id' => Series::factory(),
            'image' => fake()->name(),
            'active' => fake()->boolean(),
        ];
    }
}
