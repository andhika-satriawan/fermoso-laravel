<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\ProductSubcategory;
use App\Models\ProductDetail;

class DetailProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($slug)
    {
        $product = Product::where("slug", $slug)->with(['details', 'product_subcategory'])->firstOrFail();
        $related_products = Product::whereHas('product_subcategory', function ($query) use ($product) {
            $query->where('name', $product->product_subcategory->name);
        })->where('id', '<>', $product->id)->get();

        $title = $product->name;
        $product_subcategories = ProductSubcategory::with(['products', 'details'])->orderBy('id')->get();
        $product_details = ProductDetail::where('product_id', $product->id)->orderBy('id')->get();

        return view('pages.customer.detail-product', [
            "product" => $product,
            "related_products" => $related_products,
            "title" => $title,
            "page" => "detail-product",
            "product_subcategories" => $product_subcategories,
            "product_details" => $product_details
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
        //
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
    public function destroy(string $id)
    {
        //
    }
}
