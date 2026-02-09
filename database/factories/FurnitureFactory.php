<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Furniture>
 */
class FurnitureFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->words(2, true) . ' ' . fake()->randomElement(['Wood', 'Oak', 'Pine', 'Maple']),
            'color' => fake()->hexColor(),
            'category' => fake()->randomElement(['Chair', 'Table', 'Bed', 'Sofa', 'Wardrobe', 'Armchair']),
            'price' => fake()->randomFloat(2, 100, 3000),
            'image' => fake()->imageUrl(640, 480, 'furniture'),
        ];
    }
}
