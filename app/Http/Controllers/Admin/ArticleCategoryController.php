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
use App\Models\MasterArticleCategory;

class ArticleCategoryController extends Controller
{
    private $view_path = 'pages.admin.article.category.';
    private $route_path = 'admin.article.category.';
    private $page_info = [];

    public function __construct()
    {
        $this->page_info['title'] = 'Article Category';
    }


    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = MasterArticleCategory::orderBy('id')->get();
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
            'category_name' => 'required|string|max:255',
        ]);

        $category = new MasterArticleCategory;
        $category->name = $request->category_name;
        $category->slug = Str::slug($request->category_name);
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
        $item = MasterArticleCategory::findOrFail($id);

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
            'category_name'  => 'required|string|max:255',
        ]);

        $category = MasterArticleCategory::findOrFail($id);
        $category->name = $request->category_name;
        $category->slug = Str::slug($request->category_name);
        $category->save();

        return to_route($this->route_path . 'index')
            ->with('success', $this->page_info['title'] . ' data has been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $item = MasterArticleCategory::findorFail($id);

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
