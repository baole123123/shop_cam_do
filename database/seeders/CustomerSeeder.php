<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('customers')->insert([
            [
                'name' => 'Admin',
                'email' => 'admin@gmail.com',
                'phone' => '0123456789',
                'address' => 'Cam Lộ',
                'birthday' => '2023-10-12',
                'identification' => '23456789',
                'id_image_front' => 'xinchao',
                'id_image_back' => 'tambiet',
                'image_user' => 'camon',
                'status' => 2
            ],
        ]);
    }
}
