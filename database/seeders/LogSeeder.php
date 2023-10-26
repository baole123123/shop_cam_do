<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('logs')->insert([
            [
                'model_name' => 'Admin',
                'object_id' => 1,
                'action_name' => 'okban',
                'user_id' => 1
            ],
        ]);
    }
}
