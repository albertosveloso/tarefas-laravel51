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

Route::get('/','TarefasController@index');

Route::get('/projetos', ['as' => 'projetos.index', 'uses' => 'ProjetosController@index']);
Route::get('/projetos/create', ['as' => 'projetos.create', 'uses' => 'ProjetosController@create']);
Route::post('/projetos/store', ['as' => 'projetos.store', 'uses' => 'ProjetosController@store']);