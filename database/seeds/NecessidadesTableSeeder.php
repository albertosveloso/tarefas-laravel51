<?php

use App\Necessidade;
use Illuminate\Database\Seeder;

class NecessidadesTableSeeder extends Seeder
{
    public function run()
    {

        Necessidade::truncate(); //Apaga os dados da tabela do banco de dados

        //Chamando factory
        factory('App\Necessidade', 5)->create(); //Criando 15 novos registros faker

        //Para rodar esta seeder e demais use no terminal
        //$ php artisan db:seed
    }
    
    
}