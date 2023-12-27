<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
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



        return view('pages.customer.home', [
            "title" => "Home",
            "page" => "home",
            "product_subcategories" => $product_subcategories,
            "services" => $services,
            "sliders" => $sliders,
            "body_class" => "home page-template page-template-elementor_header_footer page page-id-21 wp-embed-responsive theme-kuteshop woocommerce-no-js rtwpvs rtwpvs-rounded rtwpvs-attribute-behavior-blur rtwpvs-archive-align-left rtwpvs-tooltip  kuteshop-4.1.8 header-style-01 has-header-sticky elementor-default elementor-template-full-width elementor-kit-12 elementor-page elementor-page-21"
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
