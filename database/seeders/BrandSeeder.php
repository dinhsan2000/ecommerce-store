<?php

namespace Database\Seeders;

use App\Models\Brand;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $brands = [
            [
                'name' => 'Apple',
                'slug' => 'apple',
                'logo' => 'brands/apple.png',
                'image' => 'brands/apple.jpg',
                'banner' => 'brands/apple-banner.jpg',
                'meta_title' => 'Apple',
                'meta_description' => 'Apple',
                'status' => 1,
            ],
            [
                'name' => 'Samsung',
                'slug' => 'samsung',
                'logo' => 'brands/samsung.png',
                'image' => 'v',
                'banner' => 'brands/samsung-banner.jpg',
                'meta_title' => 'Samsung',
                'meta_description' => 'Samsung',
                'status' => 1,
            ],
            [
                'name' => 'Huawei',
                'slug' => 'huawei',
                'logo' => 'brands/huawei.png',
                'image' => 'brands/huawei.jpg',
                'banner' => 'brands/huawei-banner.jpg',
                'meta_title' => 'Huawei',
                'meta_description' => 'Huawei',
                'status' => 1,
            ],
            [
                'name' => 'Xiaomi',
                'slug' => 'xiaomi',
                'logo' => 'brands/xiaomi.png',
                'image' => 'brands/xiaomi.jpg',
                'banner' => 'brands/xiaomi-banner.jpg',
                'meta_title' => 'Xiaomi',
                'meta_description' => 'Xiaomi',
                'status' => 1,
            ],
            [
                'name' => 'Oppo',
                'slug' => 'oppo',
                'logo' => 'brands/oppo.png',
                'image' => 'brands/oppo.jpg',
                'banner' => 'brands/oppo-banner.jpg',
                'meta_title' => 'Oppo',
                'meta_description' => 'Oppo',
                'status' => 1,
            ],
            [
                'name' => 'Vivo',
                'slug' => 'vivo',
                'logo' => 'brands/vivo.png',
                'image' => 'brands/vivo.jpg',
                'banner' => 'brands/vivo-banner.jpg',
                'meta_title' => 'Vivo',
                'meta_description' => 'Vivo',
                'status' => 1,
            ],
        ];

        foreach ($brands as $brand) {
            Brand::create($brand);
        }
    }
}
