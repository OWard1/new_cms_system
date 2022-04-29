<?php

use Illuminate\Support\Facades\Route;

Route::get('/roles', 'RoleController@index')->name('roles.index');
Route::post('/roles', 'RoleController@store')->name('roles.store');
Route::delete('/roles/{role}', 'RoleController@destroy')->name('roles.destroy');
Route::get('/roles/{role}/edit', 'RoleController@edit')->name('roles.edit');
Route::patch('/roles/{role}/update', 'RoleController@update')->name('roles.update');
Route::put('/roles/{role}/attach', 'RoleController@attach')->name('roles.permission.attach');
Route::put('/roles/{role}/detach', 'RoleController@detach')->name('roles.permission.detach');