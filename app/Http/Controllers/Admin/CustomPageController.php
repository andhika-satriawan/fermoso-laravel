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
use App\Models\CustomPage;

class CustomPageController extends Controller
{
    private $view_path = 'pages.admin.custom_page.';
    private $route_path = 'admin.custom-page.';
    private $page_info = [];

    public function __construct()
    {
        $this->page_info['title'] = 'Custom Page';
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $custom_pages = CustomPage::orderBy('code')->get();
        return view($this->view_path . 'index', [
            'page_info'     => $this->page_info,
            'custom_pages'  => $custom_pages
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view($this->view_path . 'create', [
            'page_info'     => $this->page_info
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title'    => 'required|string',
            'code'     => 'required|string',
            'content'  => 'required|string',
        ]);

        $custom_page = new CustomPage;

        $custom_page_slug = Str::slug($request->code);

        $custom_page->title     = $request->title;
        $custom_page->code      = $custom_page_slug;
        $custom_page->content   = $request->content;

        if ($request->hasFile('image')) {
            $filenameWithExt    = $request->file('image')->getClientOriginalName();
            $filename           = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension          = $request->file('image')->getClientOriginalExtension();
            $fileNameToStore    = $custom_page_slug . '-' . time() . '.' . $extension;
            $pathFile           = $request->file('image')->storeAs('assets/custom_page', $fileNameToStore, 'public');

            // Add value
            $custom_page->image = $pathFile;
        }

        $custom_page->save();

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
        $item = CustomPage::findOrFail($id);
        
        return view($this->view_path . 'edit', [
            'page_info'     => $this->page_info,
            'item'      => $item,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'title'    => 'required|string',
            'code'     => 'required|string',
            'content'  => 'required|string',
        ]);

        $custom_page = CustomPage::findOrFail($id);

        $custom_page_slug = Str::slug($request->code);

        $custom_page->title     = $request->title;
        $custom_page->code      = $custom_page_slug;
        $custom_page->content   = $request->content;

        if ($request->hasFile('image')) {
            $filenameWithExt    = $request->file('image')->getClientOriginalName();
            $filename           = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension          = $request->file('image')->getClientOriginalExtension();
            $fileNameToStore    = $custom_page_slug . '-' . time() . '.' . $extension;
            $pathFile           = $request->file('image')->storeAs('assets/article/blog', $fileNameToStore, 'public');

            // Add value
            $custom_page->image = $pathFile;
        }

        $custom_page->save();

        return to_route($this->route_path . 'index')
            ->with('success', $this->page_info['title'] . ' data has been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $item = Article::findorFail($id);

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
