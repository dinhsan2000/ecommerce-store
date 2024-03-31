<?php

namespace Database\Seeders;

use App\Models\Option;
use App\Models\OptionValue;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $items = [
            [
                'name' => 'Laptop Color',
                'type' => 'radio',
                'is_required' => true,
                'values' => [
                    ['label' => 'Black', 'price' => '0', 'type' => 'fixed'],
                    ['label' => 'White', 'price' => '0', 'type' => 'fixed'],
                    ['label' => 'Silver', 'price' => '0', 'type' => 'fixed'],
                ],
            ],
            [
                'name' => 'Laptop RAM',
                'type' => 'select',
                'is_required' => true,
                'values' => [
                    ['label' => '4GB', 'price' => '100000', 'type' => 'fixed'],
                    ['label' => '8GB', 'price' => '100000', 'type' => 'fixed'],
                    ['label' => '16GB', 'price' => '100000', 'type' => 'fixed'],
                ],
            ],
            [
                'name' => 'Laptop Storage',
                'type' => 'select',
                'is_required' => true,
                'values' => [
                    ['label' => '128GB', 'price' => '100000', 'type' => 'fixed'],
                    ['label' => '256GB', 'price' => '100000', 'type' => 'fixed'],
                    ['label' => '512GB', 'price' => '100000', 'type' => 'fixed'],
                ],
            ],
        ];

        foreach ($items as $item) {
            $option = Option::create([
                'name' => $item['name'],
                'type' => $item['type'],
                'is_required' => $item['is_required'],
            ]);

            foreach ($item['values'] as $key => $value) {
                OptionValue::create([
                    'option_id' => $option->id,
                    'label' => $value['label'],
                    'price' => $value['price'],
                    'type' => $value['type']
                ]);
            }
        }
    }
}
