<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\CategoryRequest;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::all();
        $articles = Article::all();

        return view('category.index', compact('categories', 'articles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $articles = Article::all();

        return view('category.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CategoryRequest $request)
    {
        $category = Category::create([
            'name' => $request->name,
            'cover' => $request->cover ? $request->file('cover')->store('public/covers') : null,
            'user_id' => Auth::user()->id,
        ]);

        return redirect(route('homepage'))->with('categoryCreated', 'Categoria inserita con successo.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        $articles = Article::where('is_accepted', true)->get();

        $articles = $articles->filter(function ($articles) use ($category) {
            return $articles->category == $category->name;
        });
        return view('category.show', compact('category', 'articles'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        
        return view('category.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CategoryRequest $request, Category $category)
    {
        if($request->cover){
            $category->update([
                'name' => $request->name,
                'cover' => $request->file('cover')->store('public/covers'),
            ]);
        } else {
            $category->update([
                'name' => $request->name,
            ]);
        }
        return redirect(route('homepage'))->with('categoryUpdated', "Categoria aggiornata con successo.");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        $category->delete();

        return redirect()->back()->with('categoryDeleted', "Categoria eliminata con successo.");
    }
}