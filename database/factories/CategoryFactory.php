<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name,
            'slug' => $this->faker->slug,
            'image' => $this->faker->imageUrl(),
            'banner' => $this->faker->imageUrl(),
            'is_searchable' => $this->faker->boolean,
            'status' => $this->faker->boolean,
            'parent_id' => null,
        ];
    }
}
