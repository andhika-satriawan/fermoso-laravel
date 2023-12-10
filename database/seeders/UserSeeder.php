<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data_insert = [
            [
                'name'              => 'Irwan Robi',
                'email'             => 'hello@ir1.dev',
                'email_verified_at' => new \DateTime,
                'password'          => Hash::make('12345678'),
                'created_at'        => new \DateTime,
                'updated_at'        => null,
            ],
            [
                'name'              => 'Andhika Satriawan',
                'email'             => 'andhika.satriawan1988@gmail.com',
                'email_verified_at' => new \DateTime,
                'password'          => Hash::make('12345678'),
                'created_at'        => new \DateTime,
                'updated_at'        => null,
            ],
        ];

        DB::table('users')->insert($data_insert);
    }
}
