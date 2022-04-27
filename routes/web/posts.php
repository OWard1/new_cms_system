<?php

use Illuminate\Support\Facades\Route;

Route::get('/{post}', 'App\Http\Controllers\PostController@show')->name('post');

Route::get('/posts', 'App\Http\Controllers\PostController@index')->name('posts.index');
Route::get('/posts/create', 'App\Http\Controllers\PostController@create')->name('posts.create');
Route::post('/posts', 'App\Http\Controllers\PostController@store')->name('posts.store');

Route::delete('/posts/{post}/destroy', 'App\Http\Controllers\PostController@destroy')->name('posts.destroy');
Route::patch('/posts/{post}/update',  'App\Http\Controllers\PostController@update')->name('posts.update');
Route::get('/posts/{post}/edit', 'App\Http\Controllers\PostController@edit')->name('posts.edit');
