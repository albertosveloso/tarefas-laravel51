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

        factory(User::class)->create(
           [
           'name' => 'admin', 
           'email' => 'admin@gmail.com',
           'password' => bcrypt(123456),
           'remember_token' => str_random(10),
           ]
           ); 
        factory(User::class, 5)->create(); // o codigo User::class e o mesmo que 'App\User', recurso do php 5
    }
}
