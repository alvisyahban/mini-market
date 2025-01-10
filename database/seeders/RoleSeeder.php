<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\User;
use App\Models\Employee;

class RoleSeeder extends Seeder
{
    public function run(): void
    {
         
        $roles = ['Admin', 'Kasir', 'Supervisor', 'Manajer Toko', 'Gudang'];
        foreach ($roles as $role) {
            Role::firstOrCreate(['name' => $role, 'guard_name' => 'web']);
        }

        $permissions = [
            'create-product', 'read-product', 'update-product', 'delete-product',
            'create-cabang', 'read-cabang', 'update-cabang', 'delete-cabang',
            'create-pegawai', 'read-pegawai', 'update-pegawai', 'delete-pegawai',
            'create-transaksi', 'read-transaksi', 'update-transaksi', 'delete-transaksi',
            'read-stok', 'update-stok',
        ];
        
        foreach ($permissions as $permission) {
            Permission::firstOrCreate(['name' => $permission]);
        }

        $adminRole = Role::findByName('Admin');
        $adminRole->givePermissionTo(Permission::all());  

        $kasirRole = Role::findByName('Kasir');
        $kasirRole->givePermissionTo(['create-transaksi', 'read-transaksi']);  

        $supervisorRole = Role::findByName('Supervisor');
        $supervisorRole->givePermissionTo(['read-transaksi', 'read-stok', 'update-stok']);  

        $manajerTokoRole = Role::findByName('Manajer Toko');
        $manajerTokoRole->givePermissionTo(['create-product', 'read-product', 'update-product', 'delete-product', 'create-pegawai', 'read-pegawai', 'update-pegawai', 'delete-pegawai']);


        $gudangRole = Role::firstOrCreate(['name' => 'Gudang', 'guard_name' => 'web']);
        $gudangRole->givePermissionTo(['read-stok', 'update-stok']);  

       
        

        $storeManager = Employee::create([
            'name' => 'David Raya',
            'position' => 'Store Manager',  
            'branch_id' => 1,  
        ]);
        $storeManagerUser = User::create([
            'name' => 'David Raya',
            'email' => 'Raya123@gmail.com',
            'password' => bcrypt('password123'),
        ]);
        $storeManagerUser->assignRole('Manajer Toko'); 

        $adminUser = User::create([
            'name' => 'Jayusman',
            'email' => 'jayusman@gmail.com',
            'password' => bcrypt('password123'),
        ]);
        $adminUser->assignRole('Admin'); 
     
        $cashier = Employee::create([
            'name' => 'Inaki Pena',
            'position' => 'Cashier',  
            'branch_id' => 2,  
        ]);
        $cashierUser = User::create([
            'name' => 'Inaki Pena',
            'email' => 'pena123@gmail.com',
            'password' => bcrypt('password123'),
        ]);
        $cashierUser->assignRole('Kasir'); 
        

        $supervisor = Employee::create([
            'name' => 'David De Gea',
            'position' => 'Supervisor',  
            'branch_id' => 3, 
        ]);
        $supervisorUser = User::create([
            'name' => 'David De Gea',
            'email' => 'degea@gmail.com',
            'password' => bcrypt('password123'),
        ]);
        $supervisorUser->assignRole('Supervisor');  

     
        $storeManager = Employee::create([
            'name' => 'Ter Stergen',
            'position' => 'Manajer Toko', 
            'branch_id' => 1,  
        ]);
        $storeManagerUser = User::create([
            'name' => 'Ter Stergen',
            'email' => 'stergen@gmail.com',
            'password' => bcrypt('password123'),
        ]);
        $storeManagerUser->assignRole('Manajer Toko');  

     
        $warehouse = Employee::create([
            'name' => 'Tibaut Courtois',
            'position' => 'Gudang',  
            'branch_id' => 2,  
        ]);
        $warehouseUser = User::create([
            'name' => 'Tibaut Courtois',
            'email' => 'tibaut4@gmail.com',
            'password' => bcrypt('password123'),
        ]);
        $warehouseUser->assignRole('Gudang');
    }
}