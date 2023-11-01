<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FundSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('funds')->insert([
            [
                'name' => 'Quỹ số 1',
                'status' => 1,
                'amount' => 1000000
            ],
            [
                'name' => 'Quỹ số 2',
                'status' => 1,
                'amount' => 50000000
            ],
        ]);
    }
}
