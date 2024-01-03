<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use App\Models\Province;
use App\Models\City;
use App\Models\Kecamatan;
use App\Models\Kelurahan;

class LocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $provinceQuery = Http::withHeaders([
            'key' => '96e52c934743fbdec35dd879a0d7d40a',
        ])->get('https://pro.rajaongkir.com/api/province');
        $provinces = $provinceQuery->json();
        foreach ($provinces['rajaongkir']['results'] as $province) {
            Province::create([
                'id'            => $province['province_id'],
                'province_name' => $province['province']
            ]);

            // City
            $cityQuery = Http::withHeaders([
                'key' => '96e52c934743fbdec35dd879a0d7d40a'
            ])->get('https://pro.rajaongkir.com/api/city?province=' . $province['province_id']);
            $cities = $cityQuery->json();

            foreach ($cities['rajaongkir']['results'] as $city) {
                City::create([
                    'id' => $city['city_id'],
                    'province_id' => $city['province_id'],
                    'province_name' => $city['province'],
                    'type' => $city['type'],
                    'city_name' => $city['city_name']
                ]);

                // Subdistrict
                $subdistrictQuery = Http::withHeaders([
                    'key' => '96e52c934743fbdec35dd879a0d7d40a'
                ])->get('https://pro.rajaongkir.com/api/subdistrict?city=' . $city['city_id']);
                $subdistricts = $subdistrictQuery->json();

                foreach ($subdistricts['rajaongkir']['results'] as $subdistrict) {
                    Kecamatan::create([
                        'id' => $subdistrict['subdistrict_id'],
                        'province_id' => $subdistrict['province_id'],
                        'province_name' => $subdistrict['province'],
                        'city_id' => $subdistrict['city_id'],
                        'city_name' => $subdistrict['city'],
                        'type' => $subdistrict['type'],
                        'kecamatan_name' => $subdistrict['subdistrict_name'],
                    ]);
                }

                // $kecamatan = array_map(function ($subdistrict) { 
                //     return [
                //         'id' => $subdistrict['subdistrict_id'],
                //         'province_id' => $subdistrict['province_id'],
                //         'province_name' => $subdistrict['province'],
                //         'city_id' => $subdistrict['city_id'],
                //         'city_name' => $subdistrict['city'],
                //         'type' => $subdistrict['type'],
                //         'kecamatan_name' => $subdistrict['subdistrict_name'],
                //     ]; 
                // }, $subdistricts['rajaongkir']['results']);

                // Kecamatan::createMany($kecamatan);

            }

        }
    }
}
