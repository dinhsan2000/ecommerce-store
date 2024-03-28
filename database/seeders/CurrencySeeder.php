<?php

namespace Database\Seeders;

use App\Models\Currency;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CurrencySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $currencies = [
            [
                'name' => 'US Dollar',
                'code' => 'USD',
                'symbol' => '$',
                'exchange_rate' => 1,
                'is_default' => true,
                'status' => true,
            ],
            [
                'name' => 'Euro',
                'code' => 'EUR',
                'symbol' => '€',
                'exchange_rate' => 0.85,
                'is_default' => false,
                'status' => true,
            ],
            [
                'name' => 'Pound',
                'code' => 'GBP',
                'symbol' => '£',
                'exchange_rate' => 0.72,
                'is_default' => false,
                'status' => true,
            ],
            [
                'name' => 'Yen',
                'code' => 'JPY',
                'symbol' => '¥',
                'exchange_rate' => 110.08,
                'is_default' => false,
                'status' => true,
            ],
            [
                'name' => 'Yuan',
                'code' => 'CNY',
                'symbol' => '¥',
                'exchange_rate' => 6.48,
                'is_default' => false,
                'status' => true,
            ],
        ];

        foreach ($currencies as $currency) {
            Currency::create($currency);
        }
    }
}
