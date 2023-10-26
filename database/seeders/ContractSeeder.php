<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ContractSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('contracts')->insert([
            [
                'customer_id' => 1,
                'customer_name' => 'Phu',
                'identi' => 'fdfdg',
                'birthday' => '2023-6-29',
                'customer_image' => 'xinloi',
                'contract_type_id' => 1,
                'asset_id' => 1,
                'total_loan' => '23.000',
                'interest_payment_period' => 'sdfsgfms',
                'interest_rate' => 'hhhhhhhhdgfy',
                'date_paid' => '2020-12-21',
                'note' => 'nhanhdi',
                'image' => 'gfshgsf',
                'user_id' => 1
            ],
        ]);
    }
}
