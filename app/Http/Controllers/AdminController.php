<?php

namespace App\Http\Controllers;

use App\Article;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('admin-homePage', compact('users'));
    }
    public function userList(){
        
        $list = User::all();
        if (!$list->isEmpty()) {
            $users = DB::table('users')->get();
            return view('admin-userList', ['users' => $users]);
        }
        return view('admin-userList', compact('users'));
    }

    public function delete($id){
        DB::delete('delete from users where userId = ?',[$id]);
        return back();
    }
    public function blogMenu()
    {
        $articles = DB::table('articles')->join('categories', 'articles.categoryId', '=', 'categories.categoryId')->get();
        if(!$articles->isEmpty()){
            return view('admin-blogMenu',['articles' => $articles]);
        }
        return view('admin-blogMenu', compact('articles'));
    }
    public function deleteArticle($id){
        DB::delete('delete from articles where id = ?',[$id]);
        return back();
    }
    public function createCategory()
    {
        return view('admin-createCategory');
    }
    public function create(Request $request){
        $request->validate([
            'categoryName' => 'required',
        ]);

        $categoryName = $request->input('categoryName');
                
        DB::table('categories')->insert(
            ['categoryName' => $categoryName]
        );
        return redirect('/admin-blogMenu/admin-createCategory');
    }
}
