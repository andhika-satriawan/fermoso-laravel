<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\ProductSubcategory;
use App\Models\ProductDetail;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $carts = Cart::where('customer_id', Auth::id())->with(['product', 'product_detail'])->orderBy('id', 'DESC')->get();
        $total_carts = array_sum(array_map(function($item) {
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
        $product_subcategories = ProductSubcategory::with(['products', 'details'])->orderBy('id')->get();

        return view('pages.customer.checkout', [
            "page"  => "checkout",
            "product_subcategories" => $product_subcategories,
        ]);
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
        }
        else if (isset($request->set_quantity)) {
            $quantity = $request->set_quantity;
        }
        else {
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
        }
        else {

            Auth::user()->carts()->save(new Cart([
                'product_id'        => $request->product_id,
                'product_detail_id' => $request->product_detail_id,
                'quantity'          => $quantity,
            ]));

        }

        return redirect()->back()
            ->with('success', 'Item has been added successfully');

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
        }
        else if (isset($request->set_quantity)) {
            $quantity = $request->set_quantity;
        }
        else {
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
        }
        else {

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
