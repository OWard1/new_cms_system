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

Auth::routes();
Route::get('/', 'App\Http\Controllers\HomeController@index')->name('home');
Route::get('post/{post', 'App\Http\Controllers\PostController@show')->name('post');

Route::middleware('auth')->group(function(){

    Route::get('/admin', 'App\Http\Controllers\AdminController@index')->name('admin.index');

    Route::get('/admin/posts', 'App\Http\Controllers\PostController@index')->name('posts.index');
    Route::get('/admin/posts/create', 'App\Http\Controllers\PostController@create')->name('posts.create');
    Route::post('/admin/posts', 'App\Http\Controllers\PostController@store')->name('posts.store');

    Route::delete('/admin/posts/{post}/destroy', 'App\Http\Controllers\PostController@destroy')->name('posts.destroy');
    Route::patch('admin/posts/{post}/update',  'App\Http\Controllers\PostController@update')->name('posts.update');
    Route::get('/admin/posts/{post}/edit', 'App\Http\Controllers\PostController@edit')->name('posts.edit');

    Route::get('admin/users/{user}/profile', 'App\Http\Controllers\UserController@show')->name('user.profile.show');
    Route::put('admin/users/{user}/update', 'App\Http\Controllers\UserController@update')->name('user.profile.update');


    Route::delete('admin/users/{user}/destroy', 'App\Http\Controllers\UserController@destroy')->name('user.destroy');

});

Route::middleware(['role:admin','auth'])->group(function(){

    Route::get('admin/users', 'App\Http\Controllers\UserController@index')->name('users.index');
});

