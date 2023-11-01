<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AssetTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('asset_types')->insert([
            [
                'name' => 'Iphone 15',
                'status' => 1
            ],
            [
                'name' => 'Iphone 16',
                'status' => 1
            ],
        ]);
    }
}
