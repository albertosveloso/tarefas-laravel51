<?php

use App\StatusTarefa;
use Illuminate\Database\Seeder;

class StatusTarefaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\StatusTarefa::truncate();
        
        //Popular status personalizados
        factory('App\StatusTarefa')->create(
            [
                'descricao' => 'Aguardando',
                'apagado' => 0,
                'cancelado'=> 0
            ]
        );
        
        factory('App\StatusTarefa')->create(
            [
                'descricao' => 'Em desenvolvimento',
                'apagado' => 0,
                'cancelado'=> 0
            ]
        );
        
        factory('App\StatusTarefa')->create(
            [
                'descricao' => 'Em testes',
                'apagado' => 0,
                'cancelado'=> 0
            ]
        );
        
        factory('App\StatusTarefa')->create(
            [
                'descricao' => 'Concluído',
                'apagado' => 0,
                'cancelado'=> 0
            ]
        );
        
        //factory(StatusTarefa::class, 3)->create(); 
    }
}