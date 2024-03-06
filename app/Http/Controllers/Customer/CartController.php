<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\Cart;
use App\Models\ProductSubcategory;
use App\Models\ProductDetail;
use App\Models\Address;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $carts = Cart::where('customer_id', Auth::id())->with(['product', 'product_detail'])->orderBy('id', 'DESC')->get();
        $total_carts = array_sum(array_map(function ($item) {
            $actual_price = $item['product_detail']['discount_price'] > 0 ? $item['product_detail']['discount_price'] : $item['product_detail']['price'];
            return $item['quantity'] * $actual_price;
        }, $carts->toArray()));

        return view('pages.customer.cart', [
            "title" => "Cart",
            "page"  => "cart",
            'carts' => $carts,
            'total_carts'  => $total_carts
        ]);
    }

    public function index_api()
    {
        $carts = Cart::where('customer_id', Auth::id())->with(['product', 'product_detail'])->withSum('product_detail', 'price')->orderBy('id', 'DESC')->get();

        return response()->json([
            'success'       => true,
            'message'       => "List of all carts",
            'data'          => $carts,
        ], Response::HTTP_OK);
    }

    public function checkout()
    {
        $addresses = Address::where('customer_id', Auth::id())->orderBy('id', 'DESC')->get();

        $carts = Cart::where('customer_id', Auth::id())->with(['product', 'product_detail'])->orderBy('id', 'DESC')->get();
        $total_carts = array_sum(array_map(function ($item) {
            $actual_price = $item['product_detail']['discount_price'] > 0 ? $item['product_detail']['discount_price'] : $item['product_detail']['price'];
            return $item['quantity'] * $actual_price;
        }, $carts->toArray()));

        // if (count($addresses) == 0) {
        //     return to_route('my_account.add_address')
        //     ->with('error', 'Please add your address');
        // }

        return view('pages.customer.checkout', [
            "page"  => "checkout",
            "addresses" => $addresses,
            "carts" => $carts,
            "total_carts"  => $total_carts
        ]);
    }

    /**
     * Check Ongkir API
     */
    // public function ongkir_option_api(Request $request)
    // {
    //     $validated = $request->validate([
    //         'address_id'    => 'required|numeric|exists:App\Models\Address,id',
    //         'courier'       => 'required|string|in:jne,tiki,sicepat',
    //     ]);

    //     $address = Address::where([
    //         ['id', $request->address_id],
    //         ['customer_id', Auth::id()],
    //     ])->firstOrFail();

    //     $carts = Cart::where('customer_id', Auth::id())->with(['product', 'product_detail'])->get();

    //     // Weight
    //     $total_weight = array_sum(array_map(function ($item) {
    //         return $item['quantity'] * $item['product_detail']['weight'];
    //     }, $carts->toArray()));

    //     // Volume Weight
    //     $total_volume_weight = array_sum(array_map(function ($item) {

    //         $dimension_width    = $item['product_detail']['width'];
    //         $dimension_length   = $item['product_detail']['length'];
    //         $dimension_height   = $item['product_detail']['height'];

    //         if (
    //             (isset($dimension_width) && $dimension_width > 0) &&
    //             (isset($dimension_length) && $dimension_length > 0) &&
    //             (isset($dimension_height) && $dimension_height > 0)
    //         ) {
    //             $total_dimension = $dimension_width * $dimension_length * $dimension_height;
    //             return $item['quantity'] * (($total_dimension / 6000) * 1000);
    //         } else {
    //             return 0;
    //         }
    //     }, $carts->toArray()));

    //     $final_weight = $total_weight > $total_volume_weight ? $total_weight : $total_volume_weight;

    //     $checkOngkir = Http::withHeaders([
    //         'key' => '96e52c934743fbdec35dd879a0d7d40a',
    //     ])->post('https://pro.rajaongkir.com/api/cost', [
    //         'origin' => 153,
    //         'originType' => 'city',
    //         'destination' => $address->kecamatan->id,
    //         'destinationType' => 'subdistrict',
    //         'weight' => $final_weight,
    //         'courier' => $request->courier,
    //     ]);

    //     $response = $checkOngkir->json();

    //     return response()->json([
    //         'success'       => true,
    //         'message'       => "List of shipping option",
    //         'data'          => $response['rajaongkir'],
    //     ], Response::HTTP_OK);
    // }

    public function ongkir_option_api(Request $request)
    {
        // $validated = $request->validate([
        //     'address_id' => 'required|numeric|exists:App\Models\Address,id',
        //     'courier'    => 'required|string|in:jne,tiki,sicepat',
        // ]);

        $validated = $request->validate([
            'address_id' => 'required|numeric|exists:App\Models\Address,id',
            'courier'    => 'required|string|in:jne,jnt',
        ]);

        $address = Address::where([
            ['id', $request->address_id],
            ['customer_id', Auth::id()],
        ])->firstOrFail();

        $carts = Cart::where('customer_id', Auth::id())->with(['product', 'product_detail'])->get();

        // Weight
        $total_weight = array_sum(array_map(function ($item) {
            return $item['quantity'] * $item['product_detail']['weight'];
        }, $carts->toArray()));

        // API Request to RajaOngkir for shipping cost calculation based on weight
        $checkOngkir = Http::withHeaders([
            'key' => '96e52c934743fbdec35dd879a0d7d40a',
        ])->post('https://pro.rajaongkir.com/api/cost', [
            'origin'           => 153,
            'originType'       => 'city',
            'destination'      => $address->kecamatan->id,
            'destinationType'  => 'subdistrict',
            'weight'           => $total_weight, // Use total weight only
            'courier'          => $request->courier,
        ]);

        $response = $checkOngkir->json();

        return response()->json([
            'success' => true,
            'message' => "List of shipping option",
            'data'    => $response['rajaongkir'],
        ], Response::HTTP_OK);
    }

    public function checkout_store(Request $request)
    {
        $validated = $request->validate([
            'address_id'        => 'required|numeric|exists:App\Models\Address,id',
            'courier'           => 'required|string',
            'service'           => 'required|string',
            'shipping_price'    => 'required|numeric',
            'coupon_code'       => 'nullable|string',
        ]);

        dd("Sukses");
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'quantity'              => 'nullable|numeric|min:1',
            'set_quantity'          => 'nullable|numeric|min:1',
            'product_id'            => 'required|numeric|exists:App\Models\Product,id',
            'product_detail_id'     => 'required|numeric|exists:App\Models\ProductDetail,id',
        ]);

        if (isset($request->quantity)) {
            $quantity = $request->quantity;
        } else if (isset($request->set_quantity)) {
            $quantity = $request->set_quantity;
        } else {
            $quantity = 1;
        }

        // Check if data is exist or not
        $cartExistCheck = Cart::where([
            ['customer_id', Auth::id()],
            ['product_id', $request->product_id],
            ['product_detail_id', $request->product_detail_id],
        ])->exists();

        if ($cartExistCheck == true) {

            $cart = Cart::where([
                ['customer_id', Auth::id()],
                ['product_id', $request->product_id],
                ['product_detail_id', $request->product_detail_id],
            ])->firstOrFail();

            if (isset($request->set_quantity)) {
                $cart->update([
                    'quantity' => $quantity
                ]);
            } else {
                $cart->increment('quantity', $quantity);
            }
        } else {

            Auth::user()->carts()->save(new Cart([
                'product_id'        => $request->product_id,
                'product_detail_id' => $request->product_detail_id,
                'quantity'          => $quantity,
            ]));
        }

        return redirect()->back()
            ->with('add-cart-success', 'Product telah ditambahkan ke keranjang belanja');
    }

    public function store_api(Request $request)
    {
        $validated = $request->validate([
            'quantity'              => 'nullable|numeric|min:1',
            'set_quantity'          => 'nullable|numeric|min:1',
            'product_id'            => 'required|numeric|exists:App\Models\Product,id',
            'product_detail_id'     => 'required|numeric|exists:App\Models\ProductDetail,id',
        ]);

        if (isset($request->quantity)) {
            $quantity = $request->quantity;
        } else if (isset($request->set_quantity)) {
            $quantity = $request->set_quantity;
        } else {
            $quantity = 1;
        }

        // Check if data is exist or not
        $cartExistCheck = Cart::where([
            ['customer_id', Auth::id()],
            ['product_id', $request->product_id],
            ['product_detail_id', $request->product_detail_id],
        ])->exists();

        if ($cartExistCheck == true) {

            $cart = Cart::where([
                ['customer_id', Auth::id()],
                ['product_id', $request->product_id],
                ['product_detail_id', $request->product_detail_id],
            ])->firstOrFail();

            if (isset($request->set_quantity)) {
                $cart->update([
                    'quantity' => $quantity
                ]);
            } else {
                $cart->increment('quantity', $quantity);
            }
        } else {

            Auth::user()->carts()->save(new Cart([
                'product_id'        => $request->product_id,
                'product_detail_id' => $request->product_detail_id,
                'quantity'          => $quantity,
            ]));
        }

        $response = [
            'success' => true,
            'message' => 'Cart item has been updated'
        ];

        return response()->json($response, Response::HTTP_OK);
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        $validated = $request->validate([
            'product_id'            => 'required|numeric|exists:App\Models\Product,id',
            'product_detail_id'     => 'required|numeric|exists:App\Models\ProductDetail,id',
        ]);

        $item = Cart::where([
            ['customer_id', Auth::id()],
            ['product_id', $request->product_id],
            ['product_detail_id', $request->product_detail_id]
        ]);

        if (!$item->delete()) {
            return response()->json([
                'success' => false,
                'message' => 'Error during delete data'
            ], Response::HTTP_NOT_FOUND);
        }

        $response = [
            'success' => true,
            'message' => 'Cart item has been deleted'
        ];

        return response()->json($response, Response::HTTP_OK);
    }
}
