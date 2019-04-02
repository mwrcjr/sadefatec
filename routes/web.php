<?php

$this->group(['middleware' => ['auth'], 'namespace' => 'User'], function(){
	
	$this->resource('user', 'UserController'); //Rostas resources (basicas) para User

	Route::get('/internship', function () {
    return view('user.internship');});

});

$this->group(['middleware' => ['auth'], 'namespace' => 'Data'], function(){
	
	$this->resource('data', 'DataController'); //Rostas resources (basicas) para Data

});


Route::get('/', function () {
    return view('welcome');
});



Auth::routes();

//Rota apos o login ou registro:
Route::get('/home', 'HomeController@index')->name('home');
