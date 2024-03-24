<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $abilities = [
            'read',
            'create',
            'update',
            'delete'
        ];

        $permissionByRoles = [
            'super_admin' => [
                'attribute management',
                'attribute set management',
                'product management',
                'category management',
                'brand management',
                'coupon management',
                'currency management',
                'flash sale management',
                'import management',
                'media management',
                'menu management',
                'option management',
                'order management',
                'page management',
                'report management',
                'review management',
                'setting management',
                'slider management',
                'tax management',
                'tag management',
                'transaction management',
                'translation management',
                'user management',
                'role management',
                'variation management',
                'storefront management',
            ],
            'admin' => [
                'attribute management',
                'attribute set management',
                'product management',
                'category management',
                'brand management',
                'coupon management',
                'currency management',
                'flash sale management',
                'import management',
                'media management',
                'menu management',
                'option management',
                'order management',
                'page management',
                'report management',
                'review management',
                'setting management',
                'slider management',
                'tax management',
                'tag management',
                'transaction management',
                'translation management',
                'user management',
                'role management',
                'variation management',
                'storefront management',
            ],
            'customer' => [
                'attribute management',
                'attribute set management',
                'product management',
                'category management',
                'brand management',
                'coupon management',
                'currency management',
                'flash sale management',
                'import management',
                'media management',
                'menu management',
                'option management',
                'order management',
                'page management',
                'report management',
                'review management',
                'setting management',
                'slider management',
                'tax management',
                'tag management',
                'transaction management',
                'translation management',
                'user management',
                'role management',
                'variation management',
                'storefront management',
            ],
        ];

        foreach ($permissionByRoles['super_admin'] as $permission) {
            foreach ($abilities as $ability) {
                Permission::create(['name' => $ability . ' ' . $permission]);
            }
        }

        foreach ($permissionByRoles as $role => $permissions) {
            $full_permissions_list = [];
            foreach ($abilities as $ability) {
                foreach ($permissions as $permission) {
                    $full_permissions_list[] = $ability . ' ' . $permission;
                }
            }
            Role::create(['name' => $role])->syncPermissions($full_permissions_list);
        }

        User::find(1)->assignRole('super_admin');
        User::find(2)->assignRole('admin');
        User::find(3)->assignRole('customer');
    }
}
