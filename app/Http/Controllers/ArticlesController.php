<?php

namespace App\Http\Controllers;

use App\Article;
use App\Category;
use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    public function index()
    {
        $articles = Article::all();
        $categories = Category::all('name', 'id');

        return view('articles.index')
            ->with('articles', $articles)
            ->with('categories', $categories);
    }

    public function getArticle($id)
    {
        $article = Article::find($id);
        $categories = Category::all('name', 'id');

        return view('articles.index')
            ->with('article', $article)
            ->with('categories', $categories);
    }

    public function getArticlesByCategory($category)
    {
        $articles = Category::where('name', $category)->first()->articles;
        $categories = Category::all('name', 'id');

        return view('articles.index')
            ->with('articles', $articles)
            ->with('categories', $categories);
    }
}
