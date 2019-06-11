<?php

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


// USER
Route::resource('profile', 'User\ProfileController')->only(['index', 'create', 'store']);

// POST
Route::resource('posts', 'Post\PostController');
Route::resource('posts.comments', 'Post\PostCommentController');
