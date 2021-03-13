<?php

namespace App\Http\Controllers;

use App\Article;
use App\Category;
use Illuminate\Support\Facades\DB;

class WelcomeController extends Controller
{
    public function index()
    {
        $articles = DB::table('articles')->join('categories', 'articles.categoryId', '=', 'categories.categoryId')->get();
        if(!$articles->isEmpty()){
            return view('welcome',['article' => $articles]);
        }
        return view('welcome', compact('articles'));
    }

    public function categoryDetail($id){
        $categories = Category::where('categoryId', $id)->first();
        $articles = Article::where('categoryId', $id)->get();
        return view('category', compact('categories', 'articles'));
    }
    public function aboutUs()
    {
        return view('aboutUs');
    }
}
