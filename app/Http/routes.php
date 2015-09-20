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

//Teste autenticação:
Route::get('/auth', function(){
    $user = \App\User::find(11);
    Auth::login($user);

    if(Auth::check()){
        return "Oi";
    }

});

//usando agrupamento de rotas para não ficar repetindo o prefixo projeto
Route::group(['prefix'=>'projetos'], function(){
    Route::get('', ['as' => 'projetos.index', 'uses' => 'ProjetosController@index']);
    Route::get('create', ['as' => 'projetos.create', 'uses' => 'ProjetosController@create']);
    Route::post('store', ['as' => 'projetos.store', 'uses' => 'ProjetosController@store']);
    Route::get('edit/{id}', ['as' => 'projetos.edit', 'uses' => 'ProjetosController@edit']);
    Route::put('update/{id}', ['as' => 'projetos.update', 'uses' => 'ProjetosController@update']);
    Route::get('destroy/{id}', ['as' => 'projetos.destroy', 'uses' => 'ProjetosController@destroy']);
});

