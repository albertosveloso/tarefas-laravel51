<?php

use App\User;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\User::truncate();

        //Usuario de teste
        factory('App\User')->create(
            [
                'name' => 'Beto',
                'email' => 'beto@email.com',
                'password' => bcrypt(123),
                'remember_token' => str_random(10),
            ]
        );
        
        factory(User::class, 5)->create(); // o codigo User::class e o mesmo que 'App\User', recurso do php 5
    }
}
