<?php

namespace Database\Seeders;

use App\Models\Variation;
use App\Models\VariationValue;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VariationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $items = [
            [
                'name' => 'Size',
                'type' => 'text',
                'label' => [
                    'XL',
                    'L',
                    'M',
                    'S',
                    'XS'
                ]
            ],
            [
                'name' => 'Color',
                'type' => 'color',
                'label' => [
                    'black' => '#000000',
                    'white' => '#ffffff',
                    'red' => '#ff0000',
                    'green' => '#00ff00',
                    'blue' => '#0000ff',
                    'yellow' => '#ffff00',
                    'cyan' => '#00ffff',
                ]
            ],
            [
                'name' => 'Image',
                'type' => 'image',
                'label' => [
                    'black' => 'https://via.placeholder.com/150/000000/FFFFFF?text=Black',
                    'white' => 'https://via.placeholder.com/150/FFFFFF/000000?text=White',
                    'red' => 'https://via.placeholder.com/150/FF0000/FFFFFF?text=Red',
                    'green' => 'https://via.placeholder.com/150/00FF00/FFFFFF?text=Green',
                    'blue' => 'https://via.placeholder.com/150/0000FF/FFFFFF?text=Blue',
                    'yellow' => 'https://via.placeholder.com/150/FFFF00/000000?text=Yellow',
                    'cyan' => 'https://via.placeholder.com/150/00FFFF/000000?text=Cyan',
                ],
            ]
        ];

        foreach ($items as $item) {
            $variation = Variation::create([
                'name' => $item['name'],
                'type' => $item['type'],
            ]);

            foreach ($item['label'] as $key => $value) {
                VariationValue::create([
                    'label' => $key,
                    'variation_id' => $variation->id,
                    'value' => $value,
                ]);
            }
        }
    }
}
