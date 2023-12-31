<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory {
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array {
        $name = fake()->name();

        return [
            "name" => $name,
            "slug" => Str::slug($name),
            "description" => fake()->text(),
            'status' => fake()->boolean(),
            'feature_status' => fake()->boolean(),
            'order' => fake()->numberBetween(1, 100),
            'seo_keywords' => Str::slug(fake()->address(), ', '),
            'seo_descripton' => fake()->paragraph(),
        ];
    }
}
