<?php

$this->group(['middleware' => ['auth'], 'namespace' => 'User'], function(){
	
	$this->resource('user', 'UserController');

});


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

//Rota apos o login ou registro:
Route::get('/home', 'HomeController@index')->name('home');
