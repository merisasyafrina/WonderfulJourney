<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;


class DetailController extends Controller
{
    public function index($id)
    {
        $articles = Article::where('id', $id)->firstOrFail();
        return view('articleDetail',['article' => $articles]);   
    }
    public function index2($id)
    {
        $articles = Article::where('id', $id)->firstOrFail();
        return view('member-articleDetail',['article' => $articles]);   
    }
    public function index3($id)
    {
        $articles = Article::where('id', $id)->firstOrFail();
        return view('admin-articleDetail',['article' => $articles]);   
    }
}
