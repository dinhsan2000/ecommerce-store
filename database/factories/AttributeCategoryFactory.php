<?php

namespace Database\Factories;

use App\Models\Attribute;
use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\AttributeCategory>
 */
class AttributeCategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $category = Category::query()->get()->random();
        $attribute = Attribute::query()->get()->random();
        return [
            'attribute_id' => $attribute->id,
            'category_id' => $category->id,
        ];
    }
}
