<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BranchSeeder extends Seeder
{
    public function run()
    {
        DB::table('branches')->insert([
            [
                'branch_name' => 'Cabang Utama',
                'address' => 'Jl. Raya No. 1',
                'city' => 'Cianjur',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'branch_name' => 'Cabang Bogor',
                'address' => 'Jl. Cahaya No. 3',
                'city' => 'Bogor',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'branch_name' => 'Cabang Bandung',
                'address' => 'Jl. Pahlawan No. 10',
                'city' => 'Bandung',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}