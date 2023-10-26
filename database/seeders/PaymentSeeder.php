<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PaymentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('payments')->insert([
            [
                'date_paid' => '2019-4-20',
                'amount' => 1,
                'other_fee' => 1,
                'customer_name' => 'name',
                'contract_id' => 1,
                'user_id' => 8
            ],
        ]);
    }
}
