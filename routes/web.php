Route::get('/user/show/{id}',['as'=>'user.show','uses'=>'UserController@show']);
Route::get('/user/create',['as'=>'user.create','uses'=>'UserController@create']);
Route::post('/user/store',['as'=>'user.store','uses'=>'UserController@store']);
Route::get('/user/index',['as'=>'user.index','uses'=>'UserController@index']);