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

Route::get('/', 'PagesController@home');

Route::resource('/posts', "PostController");

Route::post('/posts/{post}/tasks', 'PostTasksController@store');
Route::patch('/tasks/{task}', 'PostTasksController@update');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
