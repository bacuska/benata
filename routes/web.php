<?php

Route::get('/',[
	'uses' => '\App\Bemata\Controllers\UserController@index',
	'as'   => 'user.all'
]);

Route::get('/users',[
	'uses' => '\App\Bemata\Controllers\UserController@index',
	'as'   => 'users.all'
]);

Route::get('/user/create',[
	'uses' => '\App\Bemata\Controllers\UserController@createView',
	'as'   => 'user.view'
]);

Route::get('/roles',[
	'uses' => '\App\Bemata\Controllers\RoleController@index',
	'as'   => 'role.all'
]);

Route::get('index',function(){
   return view('admin.index');
});

Route::get('form',function(){
    return view('admin.form');
});

Route::get('statistic',function(){
    return view('admin.statistic');
});