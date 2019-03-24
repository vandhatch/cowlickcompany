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
	$posts = App\Post::all();
<<<<<<< HEAD
    return view('welcome', $posts);
=======
    return view('welcome', compact('posts'));
>>>>>>> 986a01d... add msql and posts
});

Route::get('/posts/{id}', "PostController@show");
