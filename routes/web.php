<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
// Route::get('/', 'Auth\LoginController@showLoginForm')->name('login');


Route::get('/', 'PostController@index');
Route::get('/add-post', 'PostController@addPost');
// Route::get('/single-blog', 'PostController@singlebBlog');
Route::get('/new-blog', 'PostController@addNewBlog');
Route::post('/posts','PostController@postinu');
Route::post('/update.{post}','PostController@updatinu');
Route::get('/admin','PostController@adminpanel');
Route::get('/delete.{post}', 'PostController@delete');
Route::get('/editblog.{post}', 'PostController@edit');
Route::get('/single-blog.{post}', 'PostController@singlebBlog');
Auth::routes();

Route::get('/body-main', [App\Http\Controllers\HomeController::class, 'index'])->name('login');

Auth::routes();

Route::get('/body-main', [App\Http\Controllers\HomeController::class, 'index'])->name('body-main');