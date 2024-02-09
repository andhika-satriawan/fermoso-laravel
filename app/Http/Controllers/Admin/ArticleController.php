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
use App\Models\MasterArticleTag;
use App\Models\MasterArticleCategory;
use App\Models\Article;

class ArticleController extends Controller
{
    private $view_path = 'pages.admin.article.blog.';
    private $route_path = 'admin.article.blog.';
    private $page_info = [];

    public function __construct()
    {
        $this->page_info['title'] = 'Article Blog';
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $articles = Article::with(['categories', 'tags'])->orderBy('id')->get();
        return view($this->view_path . 'index', [
            'page_info' => $this->page_info,
            'articles'  => $articles
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = MasterArticleCategory::orderBy('name', 'ASC')->get();

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
            'summary'               => 'required|string',
            'content'               => 'required|string',
            'image'                 => 'required|mimes:jpg,bmp,png,svg',
            'article_categories'    => 'required',
            'article_tags'          => 'nullable',
        ]);

        // dd($request->article_tags);

        $article = new Article;

        $article_slug = Str::slug($request->title).'-'.hexdec(uniqid());

        $article->title     = $request->title;
        $article->slug      = $article_slug;
        $article->summary   = $request->summary;
        $article->content   = $request->content;

        if ($request->hasFile('image')) {
            $filenameWithExt    = $request->file('image')->getClientOriginalName();
            $filename           = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension          = $request->file('image')->getClientOriginalExtension();
            $fileNameToStore    = $article_slug . '-' . time() . '.' . $extension;
            $pathFile           = $request->file('image')->storeAs('assets/article/blog', $fileNameToStore, 'public');

            // Add value
            $article->image = $pathFile;
        }

        if ($article->save()) {

            // ------------------
            // ARTICLE CATEGORIES
            // ------------------
            // $categoryNames = Str::of($request->article_categories)->explode(',');
            $categoryNames = $request->article_categories;

            $categoryIds = [];
            foreach($categoryNames as $categoryName) {
                $categoryName = trim($categoryName);

                if (MasterArticleCategory::where('slug', Str::slug($categoryName))->doesntExist()) {
                    $category = new MasterArticleCategory;
                    $category->slug = Str::slug($categoryName);
                    $category->name = Str::lower($categoryName);
                    $category->save();
                } else {
                    $category = MasterArticleCategory::where('slug', Str::slug($categoryName))->firstOrFail();
                }
                
                if($category) {
                    $categoryIds[] = $category->id;
                }
            }
            $article->categories()->attach($categoryIds);

            // -------------
            // ARTICLE TAGS
            // -------------
            if ($request->article_tags) {
                // $tagNames = Str::of($request->article_tags)->explode(',');
                $tagNames = $request->article_tags;
    
                $tagIds = [];
                foreach($tagNames as $tagName) {
                    $tagName = trim($tagName);
                    
                    if (MasterArticleTag::where('slug', Str::slug($tagName))->doesntExist()) {
                        $tag = new MasterArticleTag;
                        $tag->slug = Str::slug($tagName);
                        $tag->name = Str::lower($tagName);
                        $tag->save();
                    } else {
                        $tag = MasterArticleTag::where('slug', Str::slug($tagName))->firstOrFail();
                    }
    
                    if($tag) {
                        $tagIds[] = $tag->id;
                    }
                }
                $article->tags()->attach($tagIds);
            }

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
        $item = Article::findOrFail($id);
        $categories = MasterArticleCategory::orderBy('name', 'ASC')->get();

        return view($this->view_path . 'edit', [
            'page_info'     => $this->page_info,
            'item'      => $item,
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
            'summary'               => 'required|string',
            'content'               => 'required|string',
            'image'                 => 'nullable|mimes:jpg,bmp,png,svg',
            'article_categories'    => 'required',
            'article_tags'          => 'nullable',
        ]);

        $article = Article::findOrFail($id);

        $article_slug = Str::slug($request->title).'-'.hexdec(uniqid());

        $article->title     = $request->title;
        $article->slug      = $article_slug;
        $article->summary   = $request->summary;
        $article->content   = $request->content;

        if ($request->hasFile('image')) {
            $filenameWithExt    = $request->file('image')->getClientOriginalName();
            $filename           = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension          = $request->file('image')->getClientOriginalExtension();
            $fileNameToStore    = $article_slug . '-' . time() . '.' . $extension;
            $pathFile           = $request->file('image')->storeAs('assets/article/blog', $fileNameToStore, 'public');

            // Add value
            $article->image = $pathFile;
        }

        if ($article->save()) {

            // ------------------
            // ARTICLE CATEGORIES
            // ------------------
            // $categoryNames = Str::of($request->article_categories)->explode(',');
            $categoryNames = $request->article_categories;

            $categoryIds = [];
            foreach($categoryNames as $categoryName) {
                $categoryName = trim($categoryName);

                if (MasterArticleCategory::where('slug', Str::slug($categoryName))->doesntExist()) {
                    $category = new MasterArticleCategory;
                    $category->slug = Str::slug($categoryName);
                    $category->name = Str::lower($categoryName);
                    $category->save();
                } else {
                    $category = MasterArticleCategory::where('slug', Str::slug($categoryName))->firstOrFail();
                }

                if($category) {
                    $categoryIds[] = $category->id;
                }
            }
            $article->categories()->sync($categoryIds);

            // -------------
            // ARTICLE TAGS
            // -------------
            if ($request->article_tags) {
                // $tagNames = Str::of($request->article_tags)->explode(',');
                $tagNames = $request->article_tags;
    
                $tagIds = [];
                foreach($tagNames as $tagName) {
                    $tagName = trim($tagName);
    
                    if (MasterArticleTag::where('slug', Str::slug($tagName))->doesntExist()) {
                        $tag = new MasterArticleTag;
                        $tag->slug = Str::slug($tagName);
                        $tag->name = Str::lower($tagName);
                        $tag->save();
                    } else {
                        $tag = MasterArticleTag::where('slug', Str::slug($tagName))->firstOrFail();
                    }
    
                    if($tag) {
                        $tagIds[] = $tag->id;
                    }
                }
                $article->tags()->sync($tagIds);
            }

            return to_route($this->route_path . 'index')
            ->with('success', $this->page_info['title'] . ' data has been updated successfully');

        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $item = Article::findorFail($id);

        $item->categories()->detach();
        $item->tags()->detach();

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
