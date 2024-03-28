<?php

namespace Database\Seeders;

use App\Models\AttributeSet;
use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AttributeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = Category::query()->where('status', true)->get();
        AttributeSet::factory()->count(10)->create()->each(function ($attributeSet) use ($categories) {
            $attributeSet->attributeCategories()->attach($categories->random()->id);
        });
    }
}
