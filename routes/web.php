<?php

$this->group(['middleware' => ['auth'], 'namespace' => 'User'], function(){
	
	$this->resource('user', 'UserController'); //Rostas resources (basicas) para User

	Route::get('/internship', function () {
    return view('user.internship');});

});

$this->group(['middleware' => ['auth'], 'namespace' => 'Data'], function(){
	
	$this->resource('data', 'DataController'); //Rotas resources (basicas) para Data
	Route::get('data-print', 'DataController@print')->name('data.print'); //Rota para preparaçao de impressao para Data
	Route::get('data-upstatus/{i}', 'DataController@upstatus')->name('data.upstatus'); //Rota de update de status para Data

	Route::get('pdf-convenio', 'PdfController@convenio')->name('pdf.convenio'); //Rota para gerar pdf t. de convenio atraves de Data
	Route::get('pdf-compromisso', 'PdfController@compromisso')->name('pdf.compromisso'); //gerar pdf t. de compromisso atraves de Data

});


Route::get('/', function () {
    return view('welcome');
});



Auth::routes();

//Rota apos o login ou registro:
Route::get('/home', 'HomeController@index')->name('home');
