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

class ProductCategoryController extends Controller
{
    private $view_path = 'pages.admin.product.category.';
    private $route_path = 'admin.product.category.';
    private $page_info = [];

    public function __construct()
    {
        $this->page_info['title'] = 'Product Category';
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = ProductCategory::orderBy('id')->get();
        return view($this->view_path . 'index', [
            'page_info' => $this->page_info,
            'categories'    => $categories
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view($this->view_path . 'create', [
            'page_info' => $this->page_info
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'category_name'     => 'required|string|max:255',
            'icon'              => 'nullable|mimes:jpg,bmp,png,webp',
            'image'             => 'nullable|mimes:jpg,bmp,png,webp',
            'featured_image'    => 'nullable|mimes:jpg,bmp,png,webp',
        ]);

        $category_slug = Str::slug($request->category_name);

        if (ProductCategory::where('slug', $category_slug)->exists() == true) {
            return redirect()->back()->withErrors(['category_name' => 'Category is already exist!']);
        }

        $category = new ProductCategory;
        $category->name = $request->category_name;
        $category->slug = $category_slug;

        if ($request->hasFile('image')) {
            $filenameWithExt    = $request->file('image')->getClientOriginalName();
            $filename           = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension          = $request->file('image')->getClientOriginalExtension();
            $fileNameToStore    = $category_slug . '-' . time() . '.' . $extension;
            $pathFile           = $request->file('image')->storeAs('assets/product/category', $fileNameToStore, 'public');

            // Add value
            $category->image = $pathFile;
        }

        if ($request->hasFile('icon')) {
            $icon_filenameWithExt      = $request->file('icon')->getClientOriginalName();
            $icon_filename             = pathinfo($icon_filenameWithExt, PATHINFO_FILENAME);
            $icon_extension            = $request->file('icon')->getClientOriginalExtension();
            $icon_fileNameToStore      = $category_slug . '-icon-' . time() . '.' . $icon_extension;
            $icon_pathFile             = $request->file('icon')->storeAs('assets/product/category', $icon_fileNameToStore, 'public');
            // $icon_pathFileResized      = $request->file('icon')->storeAs('assets/product/category_resized', $icon_fileNameToStore, 'public');

            // Add value
            $category->icon = $icon_pathFile;
        }

        if ($request->hasFile('featured_image')) {
            $featuredImage_filenameWithExt    = $request->file('featured_image')->getClientOriginalName();
            $featuredImage_filename           = pathinfo($featuredImage_filenameWithExt, PATHINFO_FILENAME);
            $featuredImage_extension          = $request->file('featured_image')->getClientOriginalExtension();
            $featuredImage_fileNameToStore    = $category_slug . '-featured-img-' . time() . '.' . $featuredImage_extension;
            $featuredImage_pathFile           = $request->file('featured_image')->storeAs('assets/product/category', $featuredImage_fileNameToStore, 'public');

            // Add value
            $category->featured_image = $featuredImage_pathFile;
        }

        $category->save();

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
        $item = ProductCategory::findOrFail($id);

        return view($this->view_path . 'edit', [
            'page_info' => $this->page_info,
            'item'      => $item,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'category_name'     => 'required|string|max:255',
            'icon'              => 'nullable|mimes:jpg,bmp,png,webp',
            'image'             => 'nullable|mimes:jpg,bmp,png,webp',
            'featured_image'    => 'nullable|mimes:jpg,bmp,png,webp',
        ]);

        $category_slug = Str::slug($request->category_name);

        if (ProductCategory::where('slug', $category_slug)->where('id', '<>', $id)->exists() == true) {
            return redirect()->back()->withErrors(['category_name' => 'Category is already exist!']);
        }

        $category = ProductCategory::findOrFail($id);
        $category->name = $request->category_name;
        $category->slug = $category_slug;

        if ($request->hasFile('image')) {
            $filenameWithExt    = $request->file('image')->getClientOriginalName();
            $filename           = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension          = $request->file('image')->getClientOriginalExtension();
            $fileNameToStore    = $category_slug . '-' . time() . '.' . $extension;
            $pathFile           = $request->file('image')->storeAs('assets/product/category', $fileNameToStore, 'public');

            // Add value
            $category->image = $pathFile;
        }

        if ($request->hasFile('icon')) {
            $icon_filenameWithExt      = $request->file('icon')->getClientOriginalName();
            $icon_filename             = pathinfo($icon_filenameWithExt, PATHINFO_FILENAME);
            $icon_extension            = $request->file('icon')->getClientOriginalExtension();
            $icon_fileNameToStore      = $category_slug . '-icon-' . time() . '.' . $icon_extension;
            $icon_pathFile             = $request->file('icon')->storeAs('assets/product/category', $icon_fileNameToStore, 'public');
            // $icon_pathFileResized      = $request->file('icon')->storeAs('assets/product/category_resized', $icon_fileNameToStore, 'public');

            // Add value
            $category->icon = $icon_pathFile;
        }

        if ($request->hasFile('featured_image')) {
            $featuredImage_filenameWithExt    = $request->file('featured_image')->getClientOriginalName();
            $featuredImage_filename           = pathinfo($featuredImage_filenameWithExt, PATHINFO_FILENAME);
            $featuredImage_extension          = $request->file('featured_image')->getClientOriginalExtension();
            $featuredImage_fileNameToStore    = $category_slug . '-featured-img-' . time() . '.' . $featuredImage_extension;
            $featuredImage_pathFile           = $request->file('featured_image')->storeAs('assets/product/category', $featuredImage_fileNameToStore, 'public');

            // Add value
            $category->featured_image = $featuredImage_pathFile;
        }

        $category->save();

        return to_route($this->route_path . 'index')
            ->with('success', $this->page_info['title'] . ' data has been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $item = ProductCategory::findorFail($id);

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
