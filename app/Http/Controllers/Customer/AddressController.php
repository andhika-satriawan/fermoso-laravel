<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rules\File;
use Carbon\Carbon as Carbon;
use Symfony\Component\HttpFoundation\Response;
use App\Models\Address;
use App\Models\Province;
use App\Models\City;
use App\Models\Kecamatan;

class AddressController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $addresses = Address::where('customer_id', Auth::id())->orderBy('id', 'DESC')->get();

        return view('pages.customer.my-account.addresses', [
            "page"      => "addresses",
            "addresses" => $addresses
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $provinces = Province::orderBy('id', 'ASC')->get();

        return view('pages.customer.my-account.add-address', [
            "page"  => "Add Address",
            "provinces" => $provinces
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'label'   => 'required|string',
            'recipient_name'   => 'required|string',
            'phone'   => 'required|numeric',
            'province_id'   => 'required|numeric|exists:App\Models\Province,id',
            'city_id'   => 'required|numeric|exists:App\Models\City,id',
            'kecamatan_id'   => 'required|numeric|exists:App\Models\Kecamatan,id',
            'kelurahan'   => 'required|string',
            'address_detail'   => 'required|string',
            'postal_code'   => 'required|string',
        ]);

        $address = new Address;
        $address->customer_id       = Auth::id();
        $address->label             = $request->label;
        $address->recipient_name    = $request->recipient_name;
        $address->phone             = $request->phone;
        $address->province_id       = $request->province_id;
        $address->city_id           = $request->city_id;
        $address->kecamatan_id      = $request->kecamatan_id;
        $address->kelurahan         = $request->kelurahan;
        $address->address_detail    = $request->address_detail;
        $address->postal_code       = $request->postal_code;
        $address->save();

        return to_route('my_account.address')
            ->with('success', 'Alamat baru berhasil ditambahkan');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $address = Address::where([
            ['id', $id],
            ['customer_id', Auth::id()],
        ])->firstOrFail();

        $provinces = Province::orderBy('id', 'ASC')->get();
        $cities = City::where('province_id', $address->province_id)->orderBy('id', 'ASC')->get();
        $kecamatans = Kecamatan::where('city_id', $address->city_id)->orderBy('id', 'ASC')->get();

        return view('pages.customer.my-account.edit-address', [
            "page"          => "Add Address",
            "item"          => $address,
            "provinces"     => $provinces,
            "cities"        => $cities,
            "kecamatans"    => $kecamatans,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'label'   => 'required|string',
            'recipient_name'   => 'required|string',
            'phone'   => 'required|numeric',
            'province_id'   => 'required|numeric|exists:App\Models\Province,id',
            'city_id'   => 'required|numeric|exists:App\Models\City,id',
            'kecamatan_id'   => 'required|numeric|exists:App\Models\Kecamatan,id',
            'kelurahan'   => 'required|string',
            'address_detail'   => 'required|string',
            'postal_code'   => 'required|string',
        ]);

        $address = Address::where([
            ['id', $id],
            ['customer_id', Auth::id()],
        ])->firstOrFail();

        $address->label             = $request->label;
        $address->recipient_name    = $request->recipient_name;
        $address->phone             = $request->phone;
        $address->province_id       = $request->province_id;
        $address->city_id           = $request->city_id;
        $address->kecamatan_id      = $request->kecamatan_id;
        $address->kelurahan         = $request->kelurahan;
        $address->address_detail    = $request->address_detail;
        $address->postal_code       = $request->postal_code;
        $address->save();

        return to_route('my_account.address')
            ->with('success', 'Alamat berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }


    public function city(Request $request)
    {
        $validated = $request->validate([
            'province_id'   => 'required|numeric|exists:App\Models\Province,id',
        ]);

        $cities = City::where('province_id', $request->province_id)->orderBy('city_name', 'ASC')->get();
        
        return response()->json([
            'success'       => true,
            'message'       => "List of all cities",
            'data'          => $cities,
        ], Response::HTTP_OK);
    }

    public function kecamatan(Request $request)
    {
        $validated = $request->validate([
            'city_id'   => 'required|numeric|exists:App\Models\City,id',
        ]);

        $kecamatan = Kecamatan::where('city_id', $request->city_id)->orderBy('city_name', 'ASC')->get();
        
        return response()->json([
            'success'       => true,
            'message'       => "List of all kecamatan",
            'data'          => $kecamatan,
        ], Response::HTTP_OK);
    }

}
