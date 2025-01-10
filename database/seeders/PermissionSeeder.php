<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class PermissionSeeder extends Seeder
{
    public function run()
    {
        // Daftar permissions
        $permissions = [
            'view_dashboard',
            'view_products',
            'manage_products',
            'view_transactions',
            'manage_transactions',
            'manage_stock',
        ];

        // Membuat permissions
        foreach ($permissions as $permission) {
            Permission::create(['name' => $permission]);
        }

        // Assign permissions ke role
        $owner = Role::findByName('Owner');
        $owner->givePermissionTo($permissions);

        $supervisor = Role::findByName('Supervisor');
        $supervisor->givePermissionTo(['view_dashboard', 'view_transactions']);

        $kasir = Role::findByName('Kasir');
        $kasir->givePermissionTo(['view_transactions', 'manage_transactions']);

        $gudang = Role::findByName('Pegawai Gudang');
        $gudang->givePermissionTo(['manage_stock']);

     
    }
}
