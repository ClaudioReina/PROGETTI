<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::all();

        return view('category.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('category.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $category = Category::create([
            'name' => $request->name,
            'cover' => $request->cover ? $request->file('cover')->store('public/covers') : null,
        ]);

        return redirect(route('homepage'))->with('categoryCreated', 'Categoria inserita.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        $articles = Article::all();

        $articles = $articles->filter(function ($articles) use ($category) {
            return $articles->category == $category->id;
        });
        return view('category.show', compact('category', 'articles'));

    }

    // /**
    //  * Show the form for editing the specified resource.
    //  */
    // public function edit(Category $category)
    // {
    //     //
    // }

    // /**
    //  * Update the specified resource in storage.
    //  */
    // public function update(Request $request, Category $category)
    // {
    //     //
    // }

    // /**
    //  * Remove the specified resource from storage.
    //  */
    // public function destroy(Category $category)
    // {
    //     //
    // }
}
