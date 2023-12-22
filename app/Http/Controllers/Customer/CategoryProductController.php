<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\ProductSubcategory;
use App\Models\ProductDetail;

class CategoryProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($slug)
    {
        $product_subcategories = ProductSubcategory::with(['products', 'details'])->orderBy('id')->get();

        $current_subcategory = ProductSubcategory::where('slug', $slug)->firstOrFail();

        $products = Product::where('product_subcategory_id', $current_subcategory->id)->get();

        foreach ($product_subcategories as $product_subcategory) {
            $product_subcategory->product_count = Product::where('product_subcategory_id', $product_subcategory->id)->count();
        }

        return view('pages.customer.category-product', [
            "title" => $current_subcategory->name,
            "page" => $current_subcategory->slug,
            "product_subcategories" => $product_subcategories,
            'products' => $products,
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
