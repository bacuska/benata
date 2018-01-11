<?php

Route::get('/user/{id}',[
	'uses' => '\App\Bemata\Controllers\UserController@apiUser',
	'as'   => 'users.all'
]);

Route::post('/user/',[
	'uses' => '\App\Bemata\Controllers\UserController@apiUserCreate',
	'as'   => 'users.create'
]);

Route::post('/user-update/{id}',[
	'uses' => '\App\Bemata\Controllers\UserController@apiUserUpdate',
	'as'   => 'users.update'
]);

Route::post('/role/',[
	'uses' => '\App\Bemata\Controllers\RoleController@apiRoleCreate',
	'as'   => 'role.create'
]);