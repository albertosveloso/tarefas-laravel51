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
//Event::listen('illuminate.query', function($sql) { var_dump($sql) ;});

Route::get('/','Auth\AuthController@getLogin');

// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');

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

//Tipos Tarefa
Route::group(['prefix'=>'tipostarefa', 'middleware'=>'auth'], function(){
    Route::get('', ['as' => 'tipostarefa.index', 'uses' => 'TiposTarefaController@index']);
    Route::get('create', ['as' => 'tipostarefa.create', 'uses' => 'TiposTarefaController@create']);
    Route::post('store', ['as' => 'tipostarefa.store', 'uses' => 'TiposTarefaController@store']);
    Route::get('edit/{id}', ['as' => 'tipostarefa.edit', 'uses' => 'TiposTarefaController@edit']);
    Route::put('update/{id}', ['as' => 'tipostarefa.update', 'uses' => 'TiposTarefaController@update']);
    Route::get('destroy/{id}', ['as' => 'tipostarefa.destroy', 'uses' => 'TiposTarefaController@destroy']);
});

//Status Tarefa
Route::group(['prefix'=>'statustarefa', 'middleware'=>'auth'], function(){
    Route::get('', ['as' => 'statustarefa.index', 'uses' => 'StatusTarefaController@index']);
    Route::get('create', ['as' => 'statustarefa.create', 'uses' => 'StatusTarefaController@create']);
    Route::post('store', ['as' => 'statustarefa.store', 'uses' => 'StatusTarefaController@store']);
    Route::get('edit/{id}', ['as' => 'statustarefa.edit', 'uses' => 'StatusTarefaController@edit']);
    Route::put('update/{id}', ['as' => 'statustarefa.update', 'uses' => 'StatusTarefaController@update']);
    Route::get('destroy/{id}', ['as' => 'statustarefa.destroy', 'uses' => 'StatusTarefaController@destroy']);
});

//Tarefas
Route::group(['prefix'=>'tarefas', 'middleware'=>'auth'], function(){
    Route::get('', ['as' => 'tarefas.index', 'uses' => 'TarefasController@index']);
    Route::get('create', ['as' => 'tarefas.create', 'uses' => 'TarefasController@create']);
    Route::post('store', ['as' => 'tarefas.store', 'uses' => 'TarefasController@store']);
    Route::get('edit/{id}', ['as' => 'tarefas.edit', 'uses' => 'TarefasController@edit']);
    Route::put('update/{id}', ['as' => 'tarefas.update', 'uses' => 'TarefasController@update']);
    Route::get('destroy/{id}', ['as' => 'tarefas.destroy', 'uses' => 'TarefasController@destroy']);
});

//Usuários
Route::group(['prefix'=>'users', 'middleware'=>'auth'], function(){
    Route::get('create', ['as' => 'users.create', 'uses' => 'Auth\AuthController@create']);
    Route::post('store', ['as' => 'users.store', 'uses' => 'Auth\AuthController@store']);
    Route::get('edit/{id}', ['as' => 'users.edit', 'uses' => 'Auth\AuthController@edit']);
    Route::put('update/{id}', ['as' => 'users.update', 'uses' => 'Auth\AuthController@update']);
    Route::get('destroy/{id}', ['as' => 'users.destroy', 'uses' => 'Auth\AuthController@destroy']);
});

//Relatórios
Route::get('pdf', 'RelatoriosController@invoice');