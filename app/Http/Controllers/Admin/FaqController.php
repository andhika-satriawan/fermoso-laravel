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
use App\Models\MasterFaqCategory;
use App\Models\Faq;

class FaqController extends Controller
{
    private $view_path = 'pages.admin.faq.list.';
    private $route_path = 'admin.faq.list.';
    private $page_info = [];

    public function __construct()
    {
        $this->page_info['title'] = 'FAQ';
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $faqs = Faq::with(['categories'])->orderBy('id')->get();
        return view($this->view_path . 'index', [
            'page_info' => $this->page_info,
            'faqs'      => $faqs
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = MasterFaqCategory::orderBy('name', 'ASC')->get();

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
            'title'                 => 'required|string',
            'content'               => 'required|string',
            'image'                 => 'required|mimes:jpg,bmp,png,svg',
            'faq_categories'    => 'required',
        ]);

        // dd($request->faq_tags);

        $faq = new Faq;

        $faq_slug = Str::slug($request->title).'-'.hexdec(uniqid());

        $faq->title     = $request->title;
        $faq->slug      = $faq_slug;
        $faq->content   = $request->content;

        if ($request->hasFile('image')) {
            $filenameWithExt    = $request->file('image')->getClientOriginalName();
            $filename           = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension          = $request->file('image')->getClientOriginalExtension();
            $fileNameToStore    = $faq_slug . '-' . time() . '.' . $extension;
            $pathFile           = $request->file('image')->storeAs('assets/faq/list', $fileNameToStore, 'public');

            // Add value
            $faq->image = $pathFile;
        }

        if ($faq->save()) {

            // ------------------
            // FAQ CATEGORIES
            // ------------------
            // $categoryNames = Str::of($request->faq_categories)->explode(',');
            $categoryNames = $request->faq_categories;

            $categoryIds = [];
            foreach($categoryNames as $categoryName) {
                $categoryName = trim($categoryName);

                if (MasterFaqCategory::where('slug', Str::slug($categoryName))->doesntExist()) {
                    $category = new MasterFaqCategory;
                    $category->slug = Str::slug($categoryName);
                    $category->name = Str::lower($categoryName);
                    $category->save();
                } else {
                    $category = MasterFaqCategory::where('slug', Str::slug($categoryName))->firstOrFail();
                }
                
                if($category) {
                    $categoryIds[] = $category->id;
                }
            }
            $faq->categories()->attach($categoryIds);

            return to_route($this->route_path . 'index')
            ->with('success', $this->page_info['title'] . ' data has been inserted successfully');

        }
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
        $item = Faq::findOrFail($id);
        $categories = MasterFaqCategory::orderBy('name', 'ASC')->get();

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
            'title'                 => 'required|string',
            'content'               => 'required|string',
            'image'                 => 'nullable|mimes:jpg,bmp,png,svg',
            'faq_categories'        => 'required',
        ]);

        // dd($request->faq_tags);

        $faq = Faq::findOrFail($id);

        $faq_slug = Str::slug($request->title).'-'.hexdec(uniqid());

        $faq->title     = $request->title;
        $faq->slug      = $faq_slug;
        $faq->content   = $request->content;

        if ($request->hasFile('image')) {
            $filenameWithExt    = $request->file('image')->getClientOriginalName();
            $filename           = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension          = $request->file('image')->getClientOriginalExtension();
            $fileNameToStore    = $faq_slug . '-' . time() . '.' . $extension;
            $pathFile           = $request->file('image')->storeAs('assets/faq/list', $fileNameToStore, 'public');

            // Add value
            $faq->image = $pathFile;
        }

        if ($faq->save()) {

            // ------------------
            // FAQ CATEGORIES
            // ------------------
            // $categoryNames = Str::of($request->faq_categories)->explode(',');
            $categoryNames = $request->faq_categories;

            $categoryIds = [];
            foreach($categoryNames as $categoryName) {
                $categoryName = trim($categoryName);

                if (MasterFaqCategory::where('slug', Str::slug($categoryName))->doesntExist()) {
                    $category = new MasterFaqCategory;
                    $category->slug = Str::slug($categoryName);
                    $category->name = Str::lower($categoryName);
                    $category->save();
                } else {
                    $category = MasterFaqCategory::where('slug', Str::slug($categoryName))->firstOrFail();
                }
                
                if($category) {
                    $categoryIds[] = $category->id;
                }
            }
            $faq->categories()->attach($categoryIds);

            return to_route($this->route_path . 'index')
            ->with('success', $this->page_info['title'] . ' data has been updated successfully');

        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $item = Faq::findorFail($id);

        $item->categories()->detach();

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
