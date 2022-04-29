<?php

use Illuminate\Support\Facades\Route;

Route::get('/permissions', 'PermissionController@index')->name('permissions.index');
Route::post('/permissions', 'PermissionController@store')->name('permissions.store');
Route::delete('/permissions/{permission}', 'PermissionController@destroy')->name('permissions.destroy');
Route::get('/permissions/{permission}/edit', 'PermissionController@edit')->name('permissions.edit');
Route::patch('/permissions/{permission}/update', 'PermissionController@update')->name('permissions.update');
Route::put('/permissions/{permission}/attach', 'PermissionController@attach')->name('permissions.permission.attach');
Route::put('/permissions/{permission}/detach', 'PermissionController@detach')->name('permissions.permission.detach');