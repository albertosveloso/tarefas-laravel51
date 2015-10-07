<?php

use App\Projeto;
use Illuminate\Database\Seeder;

class ProjetosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Projeto::truncate(); //Apaga os dados da tabela do banco de dados

        //Chamando factory
        factory('App\Projeto', 10)->create(); //Criando 5 novos registros faker

        //Para rodar esta seeder e demais use no terminal
        //$ php artisan db:seed
    }
}
