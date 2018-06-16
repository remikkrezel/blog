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

Route::get('/', 'MainPageController@index');

Route::get('/posts/create', 'MainPageController@create');

Route::get('/posts/{post}', 'MainPageController@show');

Route::post('/posts', 'MainPageController@store');

Route::post('/posts/{post}/comments', 'CommentsController@store');

