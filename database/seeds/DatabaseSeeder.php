<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();
        
        //Desativar verificação chave estrangeira no mysql
        DB::statement('SET foreign_key_checks = 0;'); 
        
        //Popular usuários
        $this->call('UserTableSeeder'); 
        
        //Popular projetos
        $this->call('ProjetosTableSeeder'); 
        
        //Criando apenas um usuário
        factory('App\User')->create(
            [
                'name' => 'Beto',
                'email' => 'albertosveloso@gmail.com',
                'password' => bcrypt(123456),
                'remember_token' => str_random(10),
            ]
        );
        
        //Popular necessidades
        $this->call('NecessidadesTableSeeder'); 

        
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
        
        //Popular tarefas
        $this->call('TarefaTableSeeder'); 
        
        //Ativar verificação chave estrangeira no mysql
        DB::statement('SET foreign_key_checks = 1;'); 
        Model::reguard();
    }
}
