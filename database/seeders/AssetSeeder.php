<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AssetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('assets')->insert([
            [
                'name' => 'Admin',
                'asset_type_id' => 1,
                'description' => 'khongbiet',
                'status' => 2,
                'images' => 'khongco',
                'contract_id' => 1,
            ],
        ]);
    }
}
