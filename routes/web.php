<?php

Route::get('/user/show/{id}',['as'=>'user.show','uses'=>'UserController@show']);
Route::get('/user/create',['as'=>'user.create','uses'=>'UserController@create']);
Route::post('/user/store',['as'=>'user.store','uses'=>'UserController@store']);
Route::get('/user/index',['as'=>'user.index','uses'=>'UserController@index']);
Route::get('/user/edit/{id}',['as'=>'user.edit','uses'=>'UserController@edit']);
Route::post('/user/update/{id}', 'StudentController@update')->name('user.update');
Route::get('/user/delete/{id}', 'StudentController@delete')->name('user.delete');

Route::get('/home',['uses' => 'InventoryController@index']);
Route::get('/', ['uses'=>'InventoryController@index']);
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');




Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::resource('students','InventoryController');


Route::get('/inventory/create',['as'=>'inventory.create','uses'=>'InventoryController@create']);
Route::post('/inventory/store',['as'=>'inventory.store','uses'=>'InvnentoryController@store']);
Route::get('/inventory/index',['as'=>'inventory.index','uses'=>'InventoryController@index']);

