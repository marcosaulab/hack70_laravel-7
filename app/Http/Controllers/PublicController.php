<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PublicController extends Controller
{
    public function home()  {
        $articles = Article::orderBy('created_at', 'desc')->take(4)->get();
        return view('welcome', compact('articles'));
    }
}
