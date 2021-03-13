<?php

namespace App\Http\Controllers;

use App\Article;
use App\Category;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class MemberController extends Controller
{
    public function editProfile(){
        $list = User::all();
        if (!$list->isEmpty()) {
            $users = DB::table('users')->get();
            return view('member-profilePage', ['users' => $users]);
        }
        return view('member-profilePage', compact('users'));
    }
    public function edit(Request $request, $id)
    {
        $users = User::where('userId', $id)->firstOrFail();

        $users->name = $request->name;
        $users->email = $request->email;
        $users->phone = $request->phone;
        $users->update();

        return redirect('/member-profilePage');
    }
    public function blogMenu(){
        
        $list = Article::all();
        if (!$list->isEmpty()) {
            $articles = DB::table('articles')->get();
            return view('member-blogMenu', ['articles' => $articles]);
        }
        return view('member-blogMenu', compact('articles'));
    }
    public function delete($id){
        DB::delete('delete from articles where id = ?',[$id]);
        return back();
    }
    public function createBlog(){
        $articles = DB::table('articles')->join('categories', 'articles.categoryId', '=', 'categories.categoryId')->get();
        if(!$articles->isEmpty()){
            return view('member-createBlog',['articles' => $articles]);
        }
        return view('member-createBlog', compact('articles'));
    }

    public function create(Request $request){
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'required|image|max:10000',
        ]);

        $category = $request->input('category');
        $title = $request->input('title');
        $description = $request->input('description');
        $image = $request->file('image')->getClientOriginalName();
        $destination = base_path() . '/public/assets';
        $request->file('image')->move($destination, $image);;
        
                
        DB::table('articles')->insert(
            ['userId' => Auth::id(),
            'categoryId' => $category,
            'title' => $title, 
            'description'=> $description,
            'image' => $image]
        );
        return redirect('/member-blogMenu/member-createBlog');
    }
}
