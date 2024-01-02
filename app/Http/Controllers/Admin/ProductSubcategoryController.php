<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rules\File;
use Carbon\Carbon as Carbon;
use Symfony\Component\HttpFoundation\Response;

// use Intervention\Image\ImageManager;
// use Intervention\Image\Drivers\Imagick\Driver;

// use DataTables;
use App\Models\ProductCategory;
use App\Models\ProductSubcategory;

class ProductSubcategoryController extends Controller
{
    private $view_path = 'pages.admin.product.subcategory.';
    private $route_path = 'admin.product.subcategory.';
    private $page_info = [];

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
            'image'                 => 'nullable|mimes:jpg,bmp,png,webp',
            'featured_image'        => 'nullable|mimes:jpg,bmp,png,webp',
            'banner_left'           => 'nullable|mimes:jpg,bmp,png,webp',
            'banner_right'          => 'nullable|mimes:jpg,bmp,png,webp',
        ]);

        $subcategory_slug = Str::slug($request->subcategory_name);

        if (ProductSubcategory::where('slug', $subcategory_slug)->exists() == true) {
            return redirect()->back()->withErrors(['subcategory_name' => 'Subcategory is already exist!']);
        }

        // $ImageManager = new ImageManager(new Driver());

        $subcategory = new ProductSubcategory;
        $subcategory->product_category_id = $request->product_category_id;
        $subcategory->name = $request->subcategory_name;
        $subcategory->slug = $subcategory_slug;

        if ($request->hasFile('image')) {
            $filenameWithExt    = $request->file('image')->getClientOriginalName();
            $filename           = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension          = $request->file('image')->getClientOriginalExtension();
            $fileNameToStore    = $subcategory_slug . '-' . time() . '.' . $extension;
            $pathFile           = $request->file('image')->storeAs('assets/product/subcategory', $fileNameToStore, 'public');
            // $pathFileResized    = $request->file('image')->storeAs('assets/product/subcategory_resized', $fileNameToStore, 'public');

            // Add value
            $subcategory->image = $pathFile;

            // $imgResized = $ImageManager->read(public_path('storage/' . $pathFileResized));
            // $imgResized->cover(500, 500);
        }

        if ($request->hasFile('featured_image')) {
            $featuredImage_filenameWithExt      = $request->file('featured_image')->getClientOriginalName();
            $featuredImage_filename             = pathinfo($featuredImage_filenameWithExt, PATHINFO_FILENAME);
            $featuredImage_extension            = $request->file('featured_image')->getClientOriginalExtension();
            $featuredImage_fileNameToStore      = $subcategory_slug . '-featured-img-' . time() . '.' . $featuredImage_extension;
            $featuredImage_pathFile             = $request->file('featured_image')->storeAs('assets/product/subcategory', $featuredImage_fileNameToStore, 'public');
            // $featuredImage_pathFileResized      = $request->file('featured_image')->storeAs('assets/product/subcategory_resized', $featuredImage_fileNameToStore, 'public');

            // Add value
            $subcategory->featured_image = $featuredImage_pathFile;

            // $imgResized = $ImageManager->read(public_path('storage/' . $featuredImage_pathFileResized));
            // $imgResized->cover(234, 350);
        }

        if ($request->hasFile('banner_left')) {
            $bannerLeft_filenameWithExt     = $request->file('banner_left')->getClientOriginalName();
            $bannerLeft_filename            = pathinfo($bannerLeft_filenameWithExt, PATHINFO_FILENAME);
            $bannerLeft_extension           = $request->file('banner_left')->getClientOriginalExtension();
            $bannerLeft_fileNameToStore     = $subcategory_slug . '-banner-left-img-' . time() . '.' . $bannerLeft_extension;
            $bannerLeft_pathFile            = $request->file('banner_left')->storeAs('assets/product/subcategory', $bannerLeft_fileNameToStore, 'public');
            // $bannerLeft_pathFileResized     = $request->file('banner_left')->storeAs('assets/product/subcategory_resized', $bannerLeft_fileNameToStore, 'public');

            // Add value
            $subcategory->banner_left = $bannerLeft_pathFile;

            // $imgResized = $ImageManager->read(public_path('storage/' . $bannerLeft_pathFileResized));
            // $imgResized->cover(585, 65);
        }

        if ($request->hasFile('banner_right')) {
            $bannerRight_filenameWithExt    = $request->file('banner_right')->getClientOriginalName();
            $bannerRight_filename           = pathinfo($bannerRight_filenameWithExt, PATHINFO_FILENAME);
            $bannerRight_extension          = $request->file('banner_right')->getClientOriginalExtension();
            $bannerRight_fileNameToStore    = $subcategory_slug . '-banner-left-img-' . time() . '.' . $bannerRight_extension;
            $bannerRight_pathFile           = $request->file('banner_right')->storeAs('assets/product/subcategory', $bannerRight_fileNameToStore, 'public');
            // $bannerRight_pathFileResized    = $request->file('banner_right')->storeAs('assets/product/subcategory_resized', $bannerRight_fileNameToStore, 'public');

            // Add value
            $subcategory->banner_right = $bannerRight_pathFile;

            // $imgResized = $ImageManager->read(public_path('storage/' . $bannerRight_pathFileResized));
            // $imgResized->cover(585, 65);
        }

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

        return view($this->view_path . 'edit', [
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
            'subcategory_name'      => 'required|string|max:255|unique:product_subcategories,name,' . $id,
            'image'                 => 'nullable|mimes:jpg,bmp,png,webp',
            'featured_image'        => 'nullable|mimes:jpg,bmp,png,webp',
            'banner_left'           => 'nullable|mimes:jpg,bmp,png,webp',
            'banner_right'          => 'nullable|mimes:jpg,bmp,png,webp',
        ]);

        $subcategory_slug = Str::slug($request->subcategory_name);

        if (ProductSubcategory::where('slug', $subcategory_slug)->where('id', '<>', $id)->exists() == true) {
            return redirect()->back()->withErrors(['subcategory_name' => 'Subcategory is already exist!']);
        }

        // $ImageManager = new ImageManager(new Driver());

        $subcategory = ProductSubcategory::findOrFail($id);
        $subcategory->product_category_id = $request->product_category_id;
        $subcategory->name = $request->subcategory_name;
        $subcategory->slug = $subcategory_slug;

        if ($request->hasFile('image')) {
            $filenameWithExt    = $request->file('image')->getClientOriginalName();
            $filename           = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension          = $request->file('image')->getClientOriginalExtension();
            $fileNameToStore    = $subcategory_slug . '-' . time() . '.' . $extension;
            $pathFile           = $request->file('image')->storeAs('assets/product/subcategory', $fileNameToStore, 'public');
            // $pathFileResized    = $request->file('image')->storeAs('assets/product/subcategory_resized', $fileNameToStore, 'public');

            // Add value
            $subcategory->image = $pathFile;

            // $imgResized = $ImageManager->read(public_path('storage/' . $pathFileResized));
            // $imgResized->cover(500, 500);
        }

        if ($request->hasFile('featured_image')) {
            $featuredImage_filenameWithExt      = $request->file('featured_image')->getClientOriginalName();
            $featuredImage_filename             = pathinfo($featuredImage_filenameWithExt, PATHINFO_FILENAME);
            $featuredImage_extension            = $request->file('featured_image')->getClientOriginalExtension();
            $featuredImage_fileNameToStore      = $subcategory_slug . '-featured-img-' . time() . '.' . $featuredImage_extension;
            $featuredImage_pathFile             = $request->file('featured_image')->storeAs('assets/product/subcategory', $featuredImage_fileNameToStore, 'public');
            // $featuredImage_pathFileResized      = $request->file('featured_image')->storeAs('assets/product/subcategory_resized', $featuredImage_fileNameToStore, 'public');

            // Add value
            $subcategory->featured_image = $featuredImage_pathFile;

            // $imgResized = $ImageManager->read(public_path('storage/' . $featuredImage_pathFileResized));
            // $imgResized->cover(234, 350);
        }

        if ($request->hasFile('banner_left')) {
            $bannerLeft_filenameWithExt     = $request->file('banner_left')->getClientOriginalName();
            $bannerLeft_filename            = pathinfo($bannerLeft_filenameWithExt, PATHINFO_FILENAME);
            $bannerLeft_extension           = $request->file('banner_left')->getClientOriginalExtension();
            $bannerLeft_fileNameToStore     = $subcategory_slug . '-banner-left-img-' . time() . '.' . $bannerLeft_extension;
            $bannerLeft_pathFile            = $request->file('banner_left')->storeAs('assets/product/subcategory', $bannerLeft_fileNameToStore, 'public');
            // $bannerLeft_pathFileResized     = $request->file('banner_left')->storeAs('assets/product/subcategory_resized', $bannerLeft_fileNameToStore, 'public');

            // Add value
            $subcategory->banner_left = $bannerLeft_pathFile;

            // $imgResized = $ImageManager->read(public_path('storage/' . $bannerLeft_pathFileResized));
            // $imgResized->cover(585, 65);
        }

        if ($request->hasFile('banner_right')) {
            $bannerRight_filenameWithExt    = $request->file('banner_right')->getClientOriginalName();
            $bannerRight_filename           = pathinfo($bannerRight_filenameWithExt, PATHINFO_FILENAME);
            $bannerRight_extension          = $request->file('banner_right')->getClientOriginalExtension();
            $bannerRight_fileNameToStore    = $subcategory_slug . '-banner-left-img-' . time() . '.' . $bannerRight_extension;
            $bannerRight_pathFile           = $request->file('banner_right')->storeAs('assets/product/subcategory', $bannerRight_fileNameToStore, 'public');
            // $bannerRight_pathFileResized    = $request->file('banner_right')->storeAs('assets/product/subcategory_resized', $bannerRight_fileNameToStore, 'public');

            // Add value
            $subcategory->banner_right = $bannerRight_pathFile;

            // $imgResized = $ImageManager->read(public_path('storage/' . $bannerRight_pathFileResized));
            // $imgResized->cover(585, 65);
        }

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
