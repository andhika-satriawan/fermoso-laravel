<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Arr;

use App\Models\ProductSubcategory;
use App\Models\Product;
use App\Models\ProductDetail;
use App\Models\ProductSlider;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $product_subcategories = ProductSubcategory::orderBy('slug', 'ASC')->withCount('products')->get();
        $product_sliders = ProductSlider::get();
        $products = Product::query()
            ->when($request->search, function ($query, $search) {
                $query->where('name', 'like', "%{$search}%")
                ->orWhere('description', 'like', "%{$search}%")
                ->orWhereRelation('product_subcategory', 'name', 'like', "%{$search}%");
            })
            ->when($request->subcategory, function ($query, $subcategory) {
                $query->whereRelation('product_subcategory', 'id', $subcategory);
            })
            ->when($request->price_from, function ($query, $price_from) {
                $query->whereRelation('details', 'price', '>=', $price_from);
            })
            ->when($request->price_to, function ($query, $price_to) {
                $query->whereRelation('details', 'price', '<=', $price_to);
            })
            ->with(['product_subcategory', 'details', 'images'])
            ->orderBy('id', 'DESC')
            ->paginate(20);

        if($request->subcategory) {
            $product_subcategory = ProductSubcategory::where('id', $request->subcategory)->first();
        }

        return view('pages.customer.products', [
            "page"                  => "category-page",
            "product_subcategories" => $product_subcategories,
            "product_sliders"       => $product_sliders,
            "products"              => $products,
            "filters"    => [
                "product_count"     => $products->count(),
                "subcategory_selected" => $request->subcategory && $product_subcategory ? $product_subcategory->name : 'Not found',
                "price_from"        => $request->price_from ?? 0,
                "price_to"          => $request->price_to ?? 0,
            ]
        ]);
    }

    public function filter(Request $request)
    {
        $filter_requests = collect([]);

        if ($request->search) {
            Arr::add($filter_requests, 'search', $request->search);
        }

        if ($request->subcategory) {
            Arr::add($filter_requests, 'subcategory', $request->subcategory);
        }

        if ($request->price_from) {
            Arr::add($filter_requests, 'price_from', $request->price_from);
        }

        if ($request->price_to) {
            Arr::add($filter_requests, 'price_to', $request->price_to);
        }

        return redirect()->route('products', $filter_requests->toArray());
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
        $product_subcategories = ProductSubcategory::with(['products', 'details'])->orderBy('slug', 'ASC')->get();
        $current_subcategory = ProductSubcategory::where('slug', $slug)->firstOrFail();
        $products = Product::where('product_subcategory_id', $current_subcategory->id)->paginate(12);
        $allCategories = ProductSubcategory::orderBy('slug', 'ASC')->get();

        foreach ($product_subcategories as $product_subcategory) {
            $product_subcategory->product_count = Product::where('product_subcategory_id', $product_subcategory->id)->count();
        }

        return view('pages.customer.category-product', [
            "page" => $current_subcategory->slug,
            "product_subcategories" => $product_subcategories,
            "products" => $products,
            "current_subcategory" => $current_subcategory,
            "allCategories" => $allCategories,
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show($slug)
    {
        $product = Product::where("slug", $slug)->with(['details', 'product_subcategory', 'images', 'reviews'])
            ->withCount('reviews')
            ->withSum('transactions', 'quantity')
            ->withAvg('reviews', 'rating')
            ->firstOrFail();
        $related_products = Product::whereHas('product_subcategory', function ($query) use ($product) {
            $query->where('name', $product->product_subcategory->name);
        })->where('id', '<>', $product->id)->get();
        // $products = Product::get();

        // dd($product);

        return view('pages.customer.detail-product', [
            "product" => $product,
            // "products" => $products,
            "related_products" => $related_products,
            "page" => "detail-product",
        ]);
    }

    /**
     * API resources.
     */
    public function subcategory_api()
    {
        $product_subcategories = ProductSubcategory::with(['category'])->orderBy('slug', 'ASC')->get();

        return response()->json([
            'success'   => true,
            'message'   => "List of all product subcategories",
            'data'      => $product_subcategories
        ], Response::HTTP_OK);
    }

    public function show_api($id)
    {
        $product = Product::where('id', $id)->with(['details'])->firstOrFail();

        return response()->json([
            'success'   => true,
            'message'   => "Product detail",
            'data'      => $product
        ], Response::HTTP_OK);
    }

    public function variant_show_api($id)
    {
        $product_detail = ProductDetail::where('id', $id)->with(['product'])->firstOrFail();

        return response()->json([
            'success'   => true,
            'message'   => "Product variant detail",
            'data'      => $product_detail
        ], Response::HTTP_OK);
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
