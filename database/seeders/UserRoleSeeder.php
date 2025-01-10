<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Spatie\Permission\Models\Role;

class UserRoleSeeder extends Seeder
{
    public function run()
    {
        // Buat Role jika belum ada
        $owner = Role::firstOrCreate(['name' => 'Owner']);
        $supervisor = Role::firstOrCreate(['name' => 'Supervisor']);
        $kasir = Role::firstOrCreate(['name' => 'Kasir']);
        $gudang = Role::firstOrCreate(['name' => 'Pegawai Gudang']);

        // Buat User untuk Owner jika belum ada
        $userOwner = User::firstOrCreate(
            ['email' => 'owner@gmail.com'],
            [
                'name' => 'Owner',
                'password' => bcrypt('password123'),
            ]
        );
        $userOwner->assignRole($owner);

        // Buat User untuk Supervisor jika belum ada
        $userSupervisor = User::firstOrCreate(
            ['email' => 'supervisor@gmail.com'],
            [
                'name' => 'Supervisor',
                'password' => bcrypt('password123'),
            ]
        );
        $userSupervisor->assignRole($supervisor);

        // Buat User untuk Kasir jika belum ada
        $userKasir = User::firstOrCreate(
            ['email' => 'kasir@gmail.com'],
            [
                'name' => 'Kasir',
                'password' => bcrypt('password123'),
            ]
        );
        $userKasir->assignRole($kasir);

        // Buat User untuk Pegawai Gudang jika belum ada
        $userGudang = User::firstOrCreate(
            ['email' => 'gudang@gmail.com'],
            [
                'name' => 'Pegawai Gudang',
                'password' => bcrypt('password123'),
            ]
        );
        $userGudang->assignRole($gudang);
    }
}
