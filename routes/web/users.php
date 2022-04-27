<?php
use Illuminate\Support\Facades\Route;

Route::put('users/{user}/update', 'App\Http\Controllers\UserController@update')->name('user.profile.update');

Route::delete('users/{user}/destroy', 'App\Http\Controllers\UserController@destroy')->name('user.destroy');

Route::middleware(['role:Admin','auth'])->group(function(){

    Route::get('/users', 'App\Http\Controllers\UserController@index')->name('users.index');
    Route::get('/users/{role}/attach', 'App\Http\Controllers\UserController@attach')->name('user.role.attach');
    Route::get('/users/{role}/attach', 'App\Http\Controllers\UserController@detach')->name('user.role.detach');

});

Route::middleware(['auth','can:view,user'])->group(function (){

    Route::get('/users/{user}/profile', 'App\Http\Controllers\UserController@show')->name('user.profile.show');
});
