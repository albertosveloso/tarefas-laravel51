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
        
        //Popular necessidades
        $this->call('NecessidadesTableSeeder'); 

        //Popular status de tarefas
        $this->call('StatusTarefaTableSeeder');
        
        //Popular tipos de tarefas personalizados
        $this->call('TiposTarefaTableSeeder');
        
        //Popular tarefas
        $this->call('TarefaTableSeeder'); 
        
        //Ativar verificação chave estrangeira no mysql
        DB::statement('SET foreign_key_checks = 1;'); 
        Model::reguard();
    }
}
