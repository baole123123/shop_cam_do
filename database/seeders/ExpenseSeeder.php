<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ExpenseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('expenses')->insert([
            [
                'type' => 'Admin',
                'contract_id' => 1,
                'amount' => '20.000',
                'note' => 'Cam Lộ'
            ],
        ]);
    }
}
