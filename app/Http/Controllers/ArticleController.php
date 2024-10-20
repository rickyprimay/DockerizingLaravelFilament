<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {

        $articles = Article::all();

        return view('welcome', compact('articles'));
    }

    public function show($id)
    {
        $article = Article::findOrFail($id);
        return view('details', compact('article'));
    }

}
