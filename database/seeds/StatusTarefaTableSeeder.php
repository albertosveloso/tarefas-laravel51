<?php

use App\StatusTarefa;
use Illuminate\Database\Seeder;

class StatusTarefaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\StatusTarefa::truncate();

        factory(StatusTarefa::class, 3)->create(); 
    }
}