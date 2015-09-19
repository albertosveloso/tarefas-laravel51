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

        factory(User::class, 10)->create(); // o codigo User::class e o mesmo que 'App\User', recurso do php 5
    }
}
