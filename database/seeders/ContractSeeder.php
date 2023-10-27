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
                'customer_name' => '',
                'customer_identi' => '',
                'customer_birthday' => '2023-06-29',
                'customer_image' => '',
                'contract_type_id' => 1,
                'asset_id' => 1,
                'total_loan' => '23',
                'interest_payment_period' => '',
                'interest_rate' => '',
                'date_paid' => '2020-12-21',
                'note' => '',
                'image' => '',
                'user_id' => 1
            ],
        ]);
    }
}
