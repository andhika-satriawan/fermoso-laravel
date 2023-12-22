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
            "title" => "Product",
            "page" => "products",
            "product_subcategories" => $product_subcategories,
            "body_class" => "archive tax-product_cat term-market term-316 wp-embed-responsive theme-kuteshop woocommerce woocommerce-page woocommerce-no-js rtwpvs rtwpvs-rounded rtwpvs-attribute-behavior-blur rtwpvs-archive-align-left rtwpvs-tooltip  kuteshop-4.1.8 header-style-01 has-header-sticky elementor-default elementor-kit-12"
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
        return view('pages.customer.detail-product', [
            "title" => "Detail Product",
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
