<?php

namespace Database\Factories;

use App\Models\AttributeSet;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Attribute>
 */
class AttributeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $attributeSet = AttributeSet::query()->get()->random();
        return [
            'name' => $this->faker->word,
            'value' => $this->faker->word,
            'is_filterable' => $this->faker->boolean,
            'attribute_set_id' => $attributeSet->id,
        ];
    }
}
