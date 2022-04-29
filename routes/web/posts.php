<?php

use Illuminate\Support\Facades\Route;

/*-- Posts--*/

Route::get('/post/{post}', 'PostController@show')->name('post');

Route::middleware(['auth'])->group(function () {

    Route::get('/posts/create', 'PostController@create')->name('posts.create');
    Route::get('/posts', 'PostController@index')->name('posts.index');
    Route::post('/posts', 'PostController@store')->name('post.store');

    /*-- Posts Edit and Delete--*/
    Route::get('/posts/{post}/edit', 'PostController@edit')->name('post.edit');
    Route::delete('/posts/{post}/destroy', 'PostController@destroy')->name('post.destroy');
    Route::patch('/posts/{post}/update', 'PostController@update')->name('post.update');
});
