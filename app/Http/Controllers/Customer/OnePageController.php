<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CustomPage;
use App\Models\ProductSubcategory;
use App\Models\Faq;

class OnePageController extends Controller
{
    public function carabelanja()
    {
        $product_subcategories = ProductSubcategory::with(['products', 'details'])->orderBy('id')->get();
        $page = CustomPage::where('code', 'cara-belanja')->firstOrFail();

        return view('pages.customer.cara-belanja', [
            "page" => $page,
            "product_subcategories" => $product_subcategories,
        ]);
    }

    public function faqproduct()
    {
        $product_subcategories = ProductSubcategory::with(['products', 'details'])->orderBy('id')->get();
        $faqs = Faq::all();

        return view('pages.customer.faq-product', [
            "page" => "faq-product",
            "product_subcategories" => $product_subcategories,
            "faqs" => $faqs
        ]);
    }

    public function faqtokokami()
    {
        $product_subcategories = ProductSubcategory::with(['products', 'details'])->orderBy('id')->get();
        $faqs = Faq::all();

        return view('pages.customer.faq-toko-kami', [
            "page" => "faq-product",
            "product_subcategories" => $product_subcategories,
            "faqs" => $faqs
        ]);
    }

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
