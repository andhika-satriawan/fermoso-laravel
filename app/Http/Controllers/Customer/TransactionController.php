<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Http;
use App\Models\Transaction;
use App\Models\TransactionDetail;
use App\Models\Cart;
use App\Models\ProductSubcategory;
use App\Models\ProductDetail;
use App\Models\Address;
use App\Models\Setting;
use App\Helpers\CommonHelper;
use Illuminate\Support\Str;

class TransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
            'address_id'        => 'required|numeric|exists:App\Models\Address,id',
            'courier'           => 'required|string',
            'service'           => 'required|string',
            'shipping_price'    => 'required|numeric',
            'coupon_code'       => 'nullable|string',
        ]);

        $uniqueNumber = CommonHelper::generateSerialNumber('FRM');

        $carts = Cart::where('customer_id', Auth::id())
            ->whereRelation('product_detail', 'status', 1)
            ->with(['product', 'product_detail'])
            ->get();

        $total_carts = array_sum(array_map(function ($item) {
            $actual_price = $item['product_detail']['discount_price'] > 0 ? $item['product_detail']['discount_price'] : $item['product_detail']['price'];
            return $item['quantity'] * $actual_price;
        }, $carts->toArray()));

        $address = Address::where([
            ['id', $request->address_id],
            ['customer_id', Auth::id()],
        ])->firstOrFail();
        $address_detail = $address->address_detail . ', ' . $address->kelurahan . ', ' . $address->kecamatan->kecamatan_name . ', ' . $address->city->city_name . ', ' . $address->province->province_name . ', ' . $address->postal_code;
        // $subdistrict_id = $address->subdistrict_id;
        // $recipient_name = $address->recipient_name;
        // $phone = $address->phone;

        $transaction = new Transaction;

        $transaction->code              = $uniqueNumber;
        $transaction->recipient_name    = $address->recipient_name;
        $transaction->phone             = $address->phone;
        $transaction->customer_id       = Auth::id();
        $transaction->shipping_address  = $address_detail;
        $transaction->total_price       = $total_carts;
        $transaction->shipping_price    = $request->shipping_price;
        $transaction->total             = $total_carts + $request->shipping_price;
        $transaction->shipping_status   = 'PENDING';
        $transaction->courier           = $request->courier;
        $transaction->service           = $request->service;
        $transaction->transaction_status = 'PENDING';

        if ($transaction->save()) {
            foreach ($carts as $cart) {
                $actual_price = $cart->product_detail->discount_price > 0 ? $cart->product_detail->discount_price : $cart->product_detail->price;
                $total_price = $cart->quantity * $actual_price;

                $product_detail = ProductDetail::where([
                    ['id', $cart->product_detail_id],
                    ['product_id', $cart->product_id],
                ])->firstOrFail();

                $product_detail->decrement('stock', $cart->quantity);

                TransactionDetail::create([
                    'invoice_no'        => CommonHelper::generateSerialNumber('INV'),
                    'transaction_id'    => $transaction->id,
                    'product_id'        => $cart->product_id,
                    'product_detail_id' => $cart->product_detail_id,
                    'product_name'      => $cart->product->name,
                    'sku'               => $cart->product_detail->sku,
                    'quantity'          => $cart->quantity,
                    'price'             => $actual_price, // Flexible
                    'original_price'    => $cart->product_detail->price,
                    'total'             => $total_price,
                ]);
            }

            // Delete cart data
            $deleted = Cart::where('customer_id', Auth::id())
                ->delete();

            // General Settings
            $setting = Setting::firstOrFail();

            $text_products = '';
            foreach ($carts as $cart) {
                if ($cart->product_detail->discount_price > 0) :
                    $price = number_format($cart->product_detail->discount_price, 0, ',', '.');
                else :
                    $price = number_format($cart->product_detail->price, 0, ',', '.');
                endif;

                // $text_chat .=  $uniqueNumber . ' dengan rincian: Produk ' . $cart->product->name . $cart->quantity . 'pcs x ' . ' Rp ' . number_format(($cart->product_detail->discount_price > 0 ? $cart->product_detail->discount_price : $cart->product_detail->price), 0, ',', '.') .  number_format(($cart->product_detail->discount_price > 0 ? $cart->product_detail->discount_price : $cart->product_detail->price) * $cart->quantity, 0, ',', '.') . ' ';

                // $text_products .=  $cart->product_detail->sku . ' ' . $cart->quantity . 'pcs x ' . ' Rp ' . $price . '\n';
                $text_products .=  $cart->product->name . ' = ' . $cart->quantity . 'pcs x ' . ' Rp ' . $price . ' | ';
            }

            $text_chat = Str::replace('{transaction_code}', $uniqueNumber, $setting->chat_text);
            $text_chat = Str::replace('{transaction_products}', $text_products, $text_chat);
            $text_chat = Str::replace('{transaction_price}', number_format($transaction->total_price, 0, ',', '.'), $text_chat);
            $text_chat = Str::replace('{transaction_courier}', $transaction->courier, $text_chat);
            $text_chat = Str::replace('{transaction_shipping_price}', number_format($transaction->shipping_price, 0, ',', '.'), $text_chat);
            $text_chat = Str::replace('{transaction_total}', number_format($transaction->total, 0, ',', '.'), $text_chat);

            $text_chat_link = 'https://wa.me/62' . $setting->phone . '?text=' . $text_chat;

            return redirect()->away($text_chat_link);
        }

        return back()->with('error', 'Checkout gagal!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $transaction = Transaction::where([
            ['id', $id],
            ['customer_id', Auth::id()],
        ])
            ->with('transaction_details')
            ->with('transaction_details.product')
            ->with('transaction_details.product_detail')
            ->withSum('transaction_details', 'original_price')
            ->withSum('transaction_details', 'price')
            ->firstOrFail();

        return view('pages.customer.my-account.order-detail', [
            "page"  => 'Order Details',
            "item"  => $transaction,
        ]);
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
    public function destroy(string $id)
    {
        //
    }
}
