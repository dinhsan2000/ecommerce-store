<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'first_name' => 'Super',
            'last_name' => 'Admin Demo',
            'email' => 'superadmin@example.com',
        ]);

        User::factory()->create([
            'first_name' => 'Admin',
            'last_name' => 'Demo',
            'email' => 'admin@example.com',
        ]);

        User::factory()->create([
            'first_name' => 'Customer',
            'last_name' => 'Demo',
            'email' => 'customer@example.com',
        ]);

        $this->call([
            RolePermissionSeeder::class,
            CurrencySeeder::class,
            CategorySeeder::class,
            BrandSeeder::class,
            TagSeeder::class,
            TaxSeeder::class,
            AttributeSetSeeder::class,
            AttributeSeeder::class,
            VariationSeeder::class,
        ]);
    }
}
