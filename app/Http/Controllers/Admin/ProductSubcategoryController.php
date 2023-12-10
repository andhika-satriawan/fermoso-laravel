<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rules\File;
use Carbon\Carbon as Carbon;
use Symfony\Component\HttpFoundation\Response;
use Intervention\Image\Facades\Image;
// use DataTables;
use App\Models\ProductCategory;
use App\Models\ProductSubcategory;

class ProductSubcategoryController extends Controller
{
    private $view_path = 'pages.admin.product.subcategory.';
    private $route_path = 'admin.product.subcategory.';

    public function __construct()
    {
        $this->page_info['title'] = 'Product Sub Category';
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $subcategories = ProductSubcategory::with('category')->orderBy('name')->get();
        return view($this->view_path . 'index', [
            'page_info'     => $this->page_info,
            'subcategories' => $subcategories
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = ProductCategory::orderBy('name')->get();
        return view($this->view_path . 'create', [
            'page_info'     => $this->page_info,
            'categories'    => $categories,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'product_category_id'   => 'required|numeric|exists:App\Models\ProductCategory,id',
            'subcategory_name'      => 'required|string|max:255|unique:product_subcategories,name',
        ]);

        $subcategory = new ProductSubcategory;
        $subcategory->product_category_id = $request->product_category_id;
        $subcategory->name = $request->subcategory_name;
        $subcategory->slug = Str::slug($request->subcategory_name);
        $subcategory->save();

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
        $item = ProductSubcategory::findOrFail($id);
        $categories = ProductCategory::orderBy('name')->get();

        return view($this->view_path . 'edit',[
            'page_info'     => $this->page_info,
            'item'          => $item,
            'categories'    => $categories,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'product_category_id'   => 'required|numeric|exists:App\Models\ProductCategory,id',
            'subcategory_name'      => 'required|string|max:255|unique:product_subcategories,name,'.$id
        ]);

        $subcategory = ProductSubcategory::findOrFail($id);
        $subcategory->product_category_id = $request->product_category_id;
        $subcategory->name = $request->subcategory_name;
        $subcategory->slug = Str::slug($request->subcategory_name);
        $subcategory->save();

        return to_route($this->route_path . 'index')
        ->with('success', $this->page_info['title'] . ' data has been inserted successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $item = ProductSubcategory::findorFail($id);

        if(!$item->delete()){
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
