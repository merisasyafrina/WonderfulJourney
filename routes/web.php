<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'WelcomeController@index');
Route::get('/category/{id}', 'WelcomeController@categoryDetail');
Route::get('/articleDetail/{id}', 'DetailController@index');
Route::get('/aboutUs', 'WelcomeController@aboutUs');
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => 'member'], function () {
    Route::get('/member-profilePage', 'MemberController@editProfile');
    Route::get('/member-profilePage/edit/{id}', 'MemberController@edit')->name('member-profilePage');
    Route::get('/member-blogMenu', 'MemberController@blogMenu');
    Route::delete('/member-blogMenu/{id}', 'MemberController@delete');
    Route::get('/member-articleDetail/{id}', 'DetailController@index2');
    Route::get('/member-blogMenu/member-createBlog', 'MemberController@createBlog');
    Route::post('member-blogMenu/member-createBlog/create', 'MemberController@create')->name('member-createBlog');
});


Route::group(['middleware' => 'admin'], function () {
    Route::get('/admin-blogMenu', 'AdminController@blogMenu');
    Route::delete('/admin-blogMenu/{id}', 'AdminController@deleteArticle');
    Route::get('/admin-articleDetail/{id}', 'DetailController@index3');
    Route::get('/admin-userList', 'AdminController@userList');
    Route::delete('/admin-userList/{id}', 'AdminController@delete');
});