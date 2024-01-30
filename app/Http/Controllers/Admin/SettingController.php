<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\ProductSubcategory;
use App\Models\ProductDetail;
use App\Models\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    private $view_path = 'pages.admin.setting.deal.';
    private $route_path = 'admin.setting.deal.';
    private $page_info = [];

    public function __construct()
    {
        $this->page_info['title'] = 'Latest Deals';
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $latest_deals = Product::where('is_latest_deal', true)->get();
        $products = Product::all();
        // $product_subcategories = ProductSubcategory::with(['products', 'details'])->orderBy('id')->get();

        return view($this->view_path . 'index', [
            'page_info' => $this->page_info,
            'products'  => $products,
            'latest_deals' => $latest_deals,
            // 'product_subcateg$latest_deal' => $product_subcategories
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $products = Product::all();

        return view($this->view_path . 'create', [
            'page_info' => $this->page_info,
            'products'  => $products
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // $request->validate([
        //     'latest_deal_id' => 'required|exists:products,id',
        // ]);

        // // Update the Latest Deal in your database
        // Product::where('is_latest_deal', true)->update(['is_latest_deal' => false]);
        // Product::where('id', $request->latest_deal_id)->update(['is_latest_deal' => true]);

        // return redirect()->route($this->route_path . 'index')
        //     ->with('success', $this->page_info['title'] . ' data has been inserted successfully');

        $request->validate([
            'selectedProduct' => 'required|exists:products,id',
        ]);

        // Update only the selected product to have is_latest_deal = true
        $selectedProductId = $request->selectedProduct;
        // Product::where('is_latest_deal', true)->update(['is_latest_deal' => false]);
        Product::where('id', $selectedProductId)->update(['is_latest_deal' => true]);

        return redirect()->route($this->route_path . 'index')
            ->with('success', $this->page_info['title'] . ' data has been inserted successfully');
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
        // $item = Product::findOrFail($id);
        // $products = Product::all();

        // return view($this->view_path . 'edit', [
        //     'page_info' => $this->page_info,
        //     'item'      => $item,
        //     'products'  => $products
        // ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // $item = Service::findorFail($id);

        // if (!$item->delete()) {
        //     return response()->json([
        //         'success' => false,
        //         'message' => 'Error during delete data'
        //     ], Response::HTTP_NOT_FOUND);
        // }

        // $response = [
        //     'success' => true,
        //     'message' => $this->page_info['title'] . ' has been deleted'
        // ];

        // return response()->json($response, Response::HTTP_OK);
    }
}
