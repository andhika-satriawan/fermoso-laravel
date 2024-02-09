<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use Carbon\Carbon as Carbon;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\ProductSubcategory;
use App\Models\Service;
use App\Models\Slider;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $product_subcategories = ProductSubcategory::with(['products', 'details'])->orderBy('id')->get();
        $services = Service::orderBy('id')->get();
        $sliders = Slider::orderBy('id', 'DESC')->limit(4)->get();
        $latest_products = Product::latest()->limit(9)->get();
        $best_sellers = Product::with(['details', 'product_subcategory'])
            ->withCount('transactions as sales_count')
            ->orderBy('sales_count', 'desc')
            ->limit(9)
            ->get();
        $low_sales_products = Product::with(['details', 'product_subcategory'])
            ->withCount('transactions as sales_count') // Menggunakan withCount untuk menghitung jumlah transaksi
            ->orderBy('sales_count') // Mengurutkan berdasarkan sales_count secara ascending (rendah ke tinggi)
            ->limit(9)
            ->get();

        $latest_deals = Product::where('is_latest_deal', true)
                            ->where('latest_deal_end_date', '>', Carbon::now())
                            ->get();


        return view('pages.customer.home', [
            "title" => "Home",
            "page" => "home",
            "product_subcategories" => $product_subcategories,
            "services" => $services,
            "sliders" => $sliders,
            "latest_products" => $latest_products,
            "best_sellers" => $best_sellers,
            "low_sales_products" => $low_sales_products,
            "latest_deals" => $latest_deals
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
