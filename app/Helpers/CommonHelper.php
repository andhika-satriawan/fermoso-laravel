<?php

namespace App\Helpers;

use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;
use Illuminate\Validation\Rules\File;
use Carbon\Carbon as Carbon;
use Symfony\Component\HttpFoundation\Response;

class CommonHelper
{
    public static function generateSerialNumber($prefix)
    {
        try {
            // SerialNumber
            $currentYear = Carbon::now()->year;
            $currentMonth = Carbon::now()->format('m');

            $serialNumber = DB::table('running_numbers')
                ->where('prefix', $prefix)
                ->where('year', $currentYear)
                ->where('month', $currentMonth)
                ->orderByDesc('id')
                ->lockForUpdate()
                ->value('serial_number');

            if ($serialNumber !== null) {
                $newNumber = $serialNumber + 1;
                // UPDATE running_numbers
                DB::table('running_numbers')
                    ->where('prefix', $prefix)
                    ->where('year', $currentYear)
                    ->where('month', $currentMonth)
                    ->update(['serial_number' => $newNumber]);
            } else {
                $newNumber = $serialNumber = 1;
                DB::table('running_numbers')->insert([
                    'serial_number' => $newNumber,
                    'prefix' => $prefix,
                    'year' => $currentYear,
                    'month' => $currentMonth
                ]);
            }

            // Format nomor baru menjadi string digit
            $numberStr = str_pad($newNumber, 4, '0', STR_PAD_LEFT);

            $uniqueNumber = $prefix . Carbon::now()->format('y') . $currentMonth . $numberStr;

            return $uniqueNumber;

        } catch (\Exception $e) {
            // Jika ada error, lempar exception untuk di-handle oleh pemanggil
            throw $e;
        }
    }

}