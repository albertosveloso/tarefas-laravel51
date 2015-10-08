<?php

use App\Tarefa;
use Illuminate\Database\Seeder;

class TarefaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Tarefa::truncate();

        factory(Tarefa::class, 5)->create(); 
    }
}