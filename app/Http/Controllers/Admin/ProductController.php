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
use App\Models\ProductImage;
use App\Models\ProductDetail;
use App\Models\Product;

class ProductController extends Controller
{
    private $view_path = 'pages.admin.product.list.';
    private $route_path = 'admin.product.list.';

    public function __construct()
    {
        $this->page_info['title'] = 'Product Catalog';
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::with('product_subcategory')->orderBy('id')->get();
        return view($this->view_path . 'index', [
            'page_info' => $this->page_info,
            'products'  => $products
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = ProductCategory::orderBy('name', 'ASC')->with('subcategories')->get();
        
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
            'photo' => 'required|mimes:jpg,bmp,png',
            'product_name' => 'required|string|max:255|unique:App\Models\Product,name',
            'product_subcategory_id' => 'required|exists:App\Models\ProductSubcategory,id',
            'description' => 'required|string',
            'video_file' => 'nullable|mimes:mp4,avi',
            'video_youtube_url' => 'nullable|string',
            'weight' => 'required|numeric',
            'width' => 'required|numeric',
            'length' => 'required|numeric',
            'height' => 'required|numeric',
            'status' => 'required|numeric',
            'productDetails' => 'required|array|min:1',
            'productDetails.*.sku' => 'required|string',
            'productDetails.*.name' => 'required|string',
            'productDetails.*.price' => 'required|numeric',
            'productDetails.*.discount_price' => 'nullable|numeric',
            'productDetails.*.photo_variant' => 'nullable|mimes:jpg,bmp,png',
            'productImages.*.photo' => 'nullable|mimes:jpg,bmp,png',
        ]);

        $product = new Product;

        $product_slug = Str::slug($request->product_name);

        $product->product_subcategory_id = $request->product_subcategory_id;
        $product->name = $request->product_name;
        $product->slug = $product_slug;
        $product->description = $request->description;
        $product->video_youtube_url = $request->video_youtube_url;
        $product->status = $request->status;

        if ($request->hasFile('video_file')) {
            $videoFileNameWithExt       = $request->file('video_file')->getClientOriginalName();
            $videoFileName              = pathinfo($videoFileNameWithExt, PATHINFO_FILENAME);
            $videoFileExtension         = $request->file('video_file')->getClientOriginalExtension();
            $videoFileNameToStore       = $product_slug . '-' . time() . '.' . $videoFileExtension;
            $pathVideoFile              = $request->file('video_file')->storeAs('assets/product/video', $videoFileNameToStore, 'public');

            // Add value
            $product->video_url = $pathVideoFile;
        }

        if ($request->hasFile('photo')) {
            $filenameWithExt    = $request->file('photo')->getClientOriginalName();
            $filename           = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension          = $request->file('photo')->getClientOriginalExtension();
            $fileNameToStore    = $product_slug . '-' . time() . '.' . $extension;
            $pathFile           = $request->file('photo')->storeAs('assets/product/single', $fileNameToStore, 'public');

            // Add value
            $product->photo = $pathFile;
        }

        if ($product->save()) {
            try {

                // PRODUCT DETAIL
                $productDetailsIndex = 0;
                foreach ($request->productDetails as $productDetail) {
                    $product_detail = new ProductDetail;
                    $product_detail->product_id = $product->id;
                    $product_detail->sku = $productDetail['sku'];
                    $product_detail->name = $productDetail['name'];
                    $product_detail->price = $productDetail['price'];
                    $product_detail->discount_price = $productDetail['discount_price'];
                    $product_detail->weight = $request->weight;
                    $product_detail->width = $request->width;
                    $product_detail->length = $request->length;
                    $product_detail->height = $request->height;
                    $product_detail->status = 1;

                    if ($request->hasFile('productDetails.' . $productDetailsIndex . '.photo_variant')) {
                        $filenameWithExt    = $request->file('productDetails.' . $productDetailsIndex . '.photo_variant')->getClientOriginalName();
                        $filename           = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                        $extension          = $request->file('productDetails.' . $productDetailsIndex . '.photo_variant')->getClientOriginalExtension();
                        $fileNameToStore    = $product_slug . '-' . Str::slug($productDetail['name']) . '-' . hexdec(uniqid()) . '.' . $extension;
                        $pathFile           = $request->file('productDetails.' . $productDetailsIndex . '.photo_variant')->storeAs('assets/product/variant', $fileNameToStore, 'public');

                        // Add value
                        $product_detail->image = $pathFile;
                    }

                    $product_detail->save();

                    $productDetailsIndex++;
                }

                // PRODUCT IMAGES
                $productImagesIndex = 0;
                foreach ($request->productImages as $productImage) {
                    if ($request->hasFile('productImages.' . $productImagesIndex . '.photo')) {
                        $filenameWithExt    = $request->file('productImages.' . $productImagesIndex . '.photo')->getClientOriginalName();
                        $filename           = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                        $extension          = $request->file('productImages.' . $productImagesIndex . '.photo')->getClientOriginalExtension();
                        $fileNameToStore    = $product_slug . '-' .  hexdec(uniqid()) . '.' . $extension;
                        $pathFile           = $request->file('productImages.' . $productImagesIndex . '.photo')->storeAs('assets/product/images', $fileNameToStore, 'public');
                        
                        // Add value
                        $product_image = new ProductImage;
                        $product_image->product_id = $product->id;
                        $product_image->image = $pathFile;
                        $product_image->save();
                    }
                }
            } catch (\Exception $e) {
                $item = Product::findOrFail($product->id);

                if (!$item->delete()) {
                    return redirect()->back()->withErrors(['product' => 'Failed to delete product!']);
                }

                return redirect()->back()->withErrors(['product' => $e->getMessage()]);
            }
        }

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
        $categories = ProductCategory::orderBy('name', 'ASC')->with('product_subcategories')->get();
        $item = Product::findOrFail($id);
        $item_detail = ProductDetail::where('product_id', $item->id)->first();
        $item_images = ProductImage::where('product_id', $item->id)->get();

        return view($this->route_path . 'edit', [
            'categories' => $categories,
            'item'  => $item,
            'item_detail'  => $item_detail,
            'item_images' => $item_images
        ]);
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
        $item = Product::findorFail($id);

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
