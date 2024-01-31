<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data_insert = [
            [
                'phone'         => '812345678',
                'chat_text'     => 'Halo Admin, saya memiliki pesanan no: {transaction_code}, dengan rincian : \n\n {transaction_products} \n\n Total Produk: {transaction_price} \n Ongkir ({transaction_courier}): {transaction_shipping_price} \n Total Pesanan: {transaction_total}',
                'banner'        => null,
                'created_at'    => new \DateTime,
                'updated_at'    => null,
            ]
        ];
        DB::table('settings')->insert($data_insert);
    }
}
