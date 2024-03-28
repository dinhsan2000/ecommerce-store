<?php

namespace Database\Seeders;

use App\Models\AttributeSet;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AttributeSetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        AttributeSet::factory()->count(10)->create();
    }
}
