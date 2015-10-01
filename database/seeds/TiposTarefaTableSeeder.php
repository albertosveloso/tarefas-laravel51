<?php

use App\TiposTarefa;
use Illuminate\Database\Seeder;

class TiposTarefaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\TiposTarefa::truncate();

        factory(TiposTarefa::class, 3)->create(); 
    }
}