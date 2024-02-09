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
use App\Models\ProductSlider;

class SettingProductSliderController extends Controller
{
    private $view_path = 'pages.admin.setting.product_slider.';
    private $route_path = 'admin.setting.product-slider.';
    private $page_info = [];

    public function __construct()
    {
        $this->page_info['title'] = 'Product Slider';
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sliders = ProductSlider::orderBy('id')->get();

        return view($this->view_path . 'index', [
            'page_info' => $this->page_info,
            'sliders'   => $sliders
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
            'image'         => 'required|mimes:jpg,bmp,png,webp',
            'title'         => 'nullable|string|max:255',
            'description'   => 'nullable|string|max:255',
            'link'          => 'nullable|string|max:255',
        ]);

        $slider = new ProductSlider;
        $slider->title         = $request->title;
        $slider->description   = $request->description;
        $slider->link          = $request->link;

        $slider_slug = $request->title ? Str::slug($request->title) : Str::random(5) . '-' . hexdec(uniqid());

        if ($request->hasFile('image')) {
            $filenameWithExt    = $request->file('image')->getClientOriginalName();
            $filename           = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension          = $request->file('image')->getClientOriginalExtension();
            $fileNameToStore    = $slider_slug . '-' . time() . '.' . $extension;
            $pathFile           = $request->file('image')->storeAs('assets/product/slider', $fileNameToStore, 'public');

            // Add value
            $slider->image = $pathFile;
        }

        $slider->save();

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
        $item = ProductSlider::findOrFail($id);

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
            'image'         => 'nullable|mimes:jpg,bmp,png,webp',
            'title'         => 'nullable|string|max:255',
            'description'   => 'nullable|string|max:255',
            'link'          => 'nullable|string|max:255',
        ]);

        $slider = ProductSlider::findOrFail($id);
        $slider->title         = $request->title;
        $slider->description   = $request->description;
        $slider->link          = $request->link;

        $slider_slug = $request->title ? Str::slug($request->title) : Str::random(5) . '-' . hexdec(uniqid());

        if ($request->hasFile('image')) {
            $filenameWithExt    = $request->file('image')->getClientOriginalName();
            $filename           = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension          = $request->file('image')->getClientOriginalExtension();
            $fileNameToStore    = $slider_slug . '-' . time() . '.' . $extension;
            $pathFile           = $request->file('image')->storeAs('assets/product/slider', $fileNameToStore, 'public');

            // Add value
            $slider->image = $pathFile;
        }

        $slider->save();

        return to_route($this->route_path . 'index')
            ->with('success', $this->page_info['title'] . ' data has been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $item = ProductSlider::findorFail($id);

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
