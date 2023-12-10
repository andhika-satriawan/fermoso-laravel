<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data_insert = [
            [
                'name'              => 'Customer 1',
                'email'             => 'customer1@fermoso.com',
                'email_verified_at' => new \DateTime,
                'phone'             => '0812345671',
                'password'          => Hash::make('12345678'),
                'created_at'        => new \DateTime,
                'updated_at'        => null,
            ],
            [
                'name'              => 'Customer 2',
                'email'             => 'customer2@fermoso.com',
                'email_verified_at' => new \DateTime,
                'phone'             => '0812345672',
                'password'          => Hash::make('12345678'),
                'created_at'        => new \DateTime,
                'updated_at'        => null,
            ],
        ];

        DB::table('customers')->insert($data_insert);
    }
}
