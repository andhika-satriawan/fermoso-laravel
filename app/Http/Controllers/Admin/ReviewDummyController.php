<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rules\File;
use Carbon\Carbon as Carbon;
use Symfony\Component\HttpFoundation\Response;
// use DataTables;
use App\Models\ReviewDummy;
use App\Models\Product;

class ReviewDummyController extends Controller
{
    private $view_path = 'pages.admin.review.';
    private $route_path = 'admin.review.';
    private $page_info = [];

    public function __construct()
    {
        $this->page_info['title'] = 'Review';
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $reviews = ReviewDummy::orderBy('id')->get();

        return view($this->view_path . 'index', [
            'page_info' => $this->page_info,
            'reviews'  => $reviews
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $products = Product::orderBy('name')->get();

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
        $validated = $request->validate([
            'product_id'    => 'required|exists:App\Models\Product,id',
            'customer_name' => 'required|string|max:255',
            'rating'        => 'required|numeric',
            'comment'       => 'required|string|max:1024',
        ]);

        $review = new ReviewDummy;
        $review->product_id     = $request->product_id;
        $review->customer_name  = $request->customer_name;
        $review->rating         = $request->rating;
        $review->comment        = $request->comment;
        $review->save();

        return to_route($this->route_path . 'index')
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
        $item = ReviewDummy::findOrFail($id);
        $products = Product::orderBy('name')->get();
        
        return view($this->view_path . 'edit', [
            'page_info' => $this->page_info,
            'item'      => $item,
            'products'  => $products
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'product_id'    => 'required|exists:App\Models\Product,id',
            'customer_name' => 'required|string|max:255',
            'rating'        => 'required|numeric',
            'comment'       => 'required|string|max:1024',
        ]);

        $review = ReviewDummy::findOrFail($id);
        $review->product_id     = $request->product_id;
        $review->customer_name  = $request->customer_name;
        $review->rating         = $request->rating;
        $review->comment        = $request->comment;
        $review->save();

        return to_route($this->route_path . 'index')
            ->with('success', $this->page_info['title'] . ' data has been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $item = ReviewDummy::findorFail($id);

        if (!$item->delete()) {
            return response()->json([
                'success' => false,
                'message' => 'Error during delete data'
            ], Response::HTTP_NOT_FOUND);
        }

        $response = [
            'success' => true,
            'message' => $this->page_info['title'] . ' has been deleted'
        ];

        return response()->json($response, Response::HTTP_OK);
    }
}
