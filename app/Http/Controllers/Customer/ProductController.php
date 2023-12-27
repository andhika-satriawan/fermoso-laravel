<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ProductSubcategory;
use App\Models\Product;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $product_subcategories = ProductSubcategory::with(['products', 'details'])->orderBy('id')->get();

        // Loop through each product subcategory to calculate product count for each category
        foreach ($product_subcategories as $product_subcategory) {
            $product_subcategory->product_count = Product::where('product_subcategory_id', $product_subcategory->id)->count();
        }

        return view('pages.customer.products', [
            "page" => "category-page",
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
        //
    }

    public function category($slug)
    {
        $product_subcategories = ProductSubcategory::with(['products', 'details'])->orderBy('id')->get();
        $current_subcategory = ProductSubcategory::where('slug', $slug)->firstOrFail();
        $products = Product::where('product_subcategory_id', $current_subcategory->id)->get();

        foreach ($product_subcategories as $product_subcategory) {
            $product_subcategory->product_count = Product::where('product_subcategory_id', $product_subcategory->id)->count();
        }

        return view('pages.customer.category-product', [
            "page" => $current_subcategory->slug,
            "product_subcategories" => $product_subcategories,
            "products" => $products,
            "current_subcategory" => $current_subcategory,
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show($slug)
    {
        $product_subcategories = ProductSubcategory::with(['products', 'details'])->orderBy('id')->get();
        $product = Product::where("slug", $slug)->with(['details', 'product_subcategory'])->firstOrFail();
        $related_products = Product::whereHas('product_subcategory', function ($query) use ($product) {
            $query->where('name', $product->product_subcategory->name);
        })->where('id', '<>', $product->id)->get();
        $products = Product::get();

        return view('pages.customer.detail-product', [
            "product_subcategories" => $product_subcategories,
            "product" => $product,
            "products" => $products,
            "related_products" => $related_products,
            "page" => "detail-product",
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
