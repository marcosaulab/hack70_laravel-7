<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        $tags = Tag::all();
        return view('articles.create', compact('categories', 'tags'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        // if($request->file('img') == null) {
        //     $img = 'default.jpg';
        // } else {
        //     $img = $request->file('img')->store('public/articles');
        // }

        // $article = Article::create([
        //     'category_id' => $request->input('category_id'),
        //     'user_id' => Auth::user()->id,
        //     'title' => $request->input('title'),
        //     'subtitle' => $request->input('subtitle'),
        //     'body' => $request->input('body'),
        //     'img' => $request->hasFile('img') ? $request->file('img')->store('public/articles') : 'default.jpg',
        // ]);

        $article = Auth::user()->articles()->create([
            'category_id' => $request->input('category_id'),
            'title' => $request->input('title'),
            'subtitle' => $request->input('subtitle'),
            'body' => $request->input('body'),
            'img' => $request->hasFile('img') ? $request->file('img')->store('public/articles') : 'default.jpg',
        ]);

        // ! scrivo i dati di relazione nella tabella pivot
        $tags = $request->input('tags'); // prima prendo l'array
        $article->tags()->attach($tags); // poi scrivo nella tabella pivot i tags relativi all'articolo appena creato

        return redirect()->route('home')->with('message', 'Articolo creato correttamente');

    }

    /**
     * Display the specified resource.
     */
    public function show(Article $article)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Article $article)
    {
        $categories = Category::all();
        $tags = Tag::all();
        return view('articles.edit', compact('article', 'categories', 'tags'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Article $article)
    {
        $imgArticle = $article->img;

        $article->update([
            'category_id' => $request->input('category_id'),
            'title' => $request->input('title'),
            'subtitle' => $request->input('subtitle'),
            'body' => $request->input('body'),
            'img' => $request->hasFile('img') ? $request->file('img')->store('public/articles') : $imgArticle,
        ]);

        if($request->hasFile('img')) {
            Storage::delete($imgArticle);
        }

        return redirect()->route('home');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Article $article)
    {
        //
    }
}
