<?php

use App\TiposTarefa;
use Illuminate\Database\Seeder;

class TiposTarefaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\TiposTarefa::truncate();
        
         //Popular tipos de tarefas personalizados
        factory('App\TiposTarefa')->create(
            [
                'descricao' => 'Tarefa',
                'apagado' => 0,
                'cancelado'=> 0
            ]
        );
         
        factory('App\TiposTarefa')->create(
            [
                'descricao' => 'Bug',
                'apagado' => 0,
                'cancelado'=> 0
            ]
        );
        
        factory('App\TiposTarefa')->create(
            [
                'descricao' => 'Estudo',
                'apagado' => 0,
                'cancelado'=> 0
            ]
        );
        
        factory('App\TiposTarefa')->create(
            [
                'descricao' => 'Melhoria',
                'apagado' => 0,
                'cancelado'=> 0
            ]
        );
        
        factory('App\TiposTarefa')->create(
            [
                'descricao' => 'Análise',
                'apagado' => 0,
                'cancelado'=> 0
            ]
        );

        //factory(TiposTarefa::class, 3)->create(); 
    }
}