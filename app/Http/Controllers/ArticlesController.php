<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    public function index()
    {
        $articles = Article::all();
        $array = [
            'articles' => $articles,
        ];
        return view('articles', $array);
    }
}