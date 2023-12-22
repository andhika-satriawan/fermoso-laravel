<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AjaxController extends Controller
{
    public function ajaxMethod(Request $request)
    {
        // Lakukan sesuatu dengan data yang diterima dari permintaan AJAX
        // ...

        // Kembalikan respons jika diperlukan
        return response()->json(['status' => 'success']);
    }
}
