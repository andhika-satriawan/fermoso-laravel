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
    private $view_path = 'pages.admin.setting.general.';
    private $route_path = 'admin.setting.general.';
    private $page_info = [];

    public function __construct()
    {
        $this->page_info['title'] = 'General Settings';
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $setting = Setting::firstOrFail();
        // $product_subcategories = ProductSubcategory::with(['products', 'details'])->orderBy('id')->get();

        return view($this->view_path . 'index', [
            'page_info' => $this->page_info,
            'setting'   => $setting,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'phone'     => 'required|string',
            'chat_text' => 'required|string',
            'banner'    => 'nullable|mimes:jpg,bmp,png,webp',
        ]);

        $setting = Setting::firstOrFail();
        $setting->phone         = $request->phone;
        $setting->chat_text     = $request->chat_text;
        
        if ($request->hasFile('banner')) {
            $filenameWithExt    = $request->file('banner')->getClientOriginalName();
            $filename           = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension          = $request->file('banner')->getClientOriginalExtension();
            $fileNameToStore    = $filename . '-' . time() . '.' . $extension;
            $pathFile           = $request->file('banner')->storeAs('assets/theme/setting', $fileNameToStore, 'public');

            // Add value
            $setting->banner = $pathFile;
        }

        $setting->save();

        return to_route($this->route_path . 'index')
            ->with('success', $this->page_info['title'] . ' data has been updated successfully');
    }

}
