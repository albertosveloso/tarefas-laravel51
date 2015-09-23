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
        DB::statement('SET foreign_key_checks = 0;'); //desativando para acertando problemas de verificação chave estrangeira no mysql
        $this->call('ProjetosTableSeeder'); //Chamando TableSedder que criamos para o cad. projeto
        $this->call('UserTableSeeder'); //Chamando TableSedder para criar usuário aleatorios

        //Criando apenas um usuário
        /*
        factory('App\User')->create(
            [
                'name' => 'Beto',
                'email' => 'albertosveloso@gmail.com',
                'password' => bcrypt(123456),
                'remember_token' => str_random(10),
            ]
        );
        */

        DB::statement('SET foreign_key_checks = 1;'); //ativando verificação chave estrangeira no mysql
        Model::reguard();
    }
}
