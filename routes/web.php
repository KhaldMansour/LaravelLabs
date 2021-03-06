<?php

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
Route::group(['middleware' => 'auth'], function () {
    Route::get('/posts/create', 'PostController@create')-> name('post.create');
    Route::post('/posts', 'PostController@store')-> name('post.store');

    Route::get('/posts/edit/{post}', 'PostController@edit')-> name('post.edit');
    Route::put('/posts/{post}' , 'PostController@update')-> name('post.update');

    Route::get('/posts', 'PostController@index')-> name('post.index');
    Route::get('/posts/showall', 'PostController@showall')-> name('post.showall');
    Route::get('/posts/{post}', 'PostController@show')-> name('post.show');

    Route::get('/posts/delete/{post}', 'PostController@destroy')-> name('post.delete');
});
Route::post('/posts/{post}', 'PostController@storeComment')->name('post.addcomment');




// Auth::route();
// route::get('/home','HomeController@index')








Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
