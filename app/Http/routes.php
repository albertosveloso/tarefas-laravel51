<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

//Verificar sql que esta sendo enviado para o banco
//Event::listen('illuminate.query', function($sql) { echo '<p style="position: relative">' . $sql . '<p/>' ;});

Route::get('/','TarefasController@index');

//Autenticação login laravel um a um ou podemos usar de maneira simplificada conforme acima:
//Route::controllers([
//    'auth' => 'Auth\AuthController',
//    'password' => 'Auth\PasswordController'
//]);

Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', ['as' => 'auth.logout', 'uses' => 'Auth\AuthController@getLogout']);


//Projetos: usando agrupamento de rotas para não ficar repetindo o prefixo projeto, e já adicionando o middleware
Route::group(['prefix'=>'projetos', 'middleware'=>'auth'], function(){
    Route::get('', ['as' => 'projetos.index', 'uses' => 'ProjetosController@index']);
    Route::get('create', ['as' => 'projetos.create', 'uses' => 'ProjetosController@create']);
    Route::post('store', ['as' => 'projetos.store', 'uses' => 'ProjetosController@store']);
    Route::get('edit/{id}', ['as' => 'projetos.edit', 'uses' => 'ProjetosController@edit']);
    Route::put('update/{id}', ['as' => 'projetos.update', 'uses' => 'ProjetosController@update']);
    Route::get('destroy/{id}', ['as' => 'projetos.destroy', 'uses' => 'ProjetosController@destroy']);
});

//Necessidades
Route::group(['prefix'=>'necessidades', 'middleware'=>'auth'], function(){
    Route::get('', ['as' => 'necessidades.index', 'uses' => 'NecessidadesController@index']);
    Route::get('create', ['as' => 'necessidades.create', 'uses' => 'NecessidadesController@create']);
    Route::post('store', ['as' => 'necessidades.store', 'uses' => 'NecessidadesController@store']);
    Route::get('edit/{id}', ['as' => 'necessidades.edit', 'uses' => 'NecessidadesController@edit']);
    Route::put('update/{id}', ['as' => 'necessidades.update', 'uses' => 'NecessidadesController@update']);
    Route::get('destroy/{id}', ['as' => 'necessidades.destroy', 'uses' => 'NecessidadesController@destroy']);
});
