<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ProductSubcategory;
use App\Models\Article;
use App\Models\MasterArticleCategory;
use App\Models\MasterArticleTag;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $product_subcategories = ProductSubcategory::with(['products', 'details'])->orderBy('id')->get();
        $articles = Article::with(['tags', 'categories'])
            ->orderBy('created_at', 'desc')
            ->limit(6)
            ->get();

        return view('pages.customer.blog', [
            "product_subcategories" => $product_subcategories,
            "title" => "Blog",
            "page" => "blog",
            "articles" => $articles,

        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($slug)
    {
        $product_subcategories = ProductSubcategory::with(['products', 'details'])->orderBy('id')->get();
        $article = Article::where('slug', $slug)->with(['tags', 'categories'])->firstOrFail();
        $relatedArticles = Article::where('id', '<>', $article->id)->limit(9)->get();
        $allCategories = MasterArticleCategory::all();
        $allTags = MasterArticleTag::all();

        return view('pages.customer.detail-blog', [
            "product_subcategories" => $product_subcategories,
            "article" => $article,
            "page" => "detail-blog",
            "relatedArticles" => $relatedArticles,
            "allCategories" => $allCategories,
            "allTags" => $allTags,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
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
        //
    }
}
