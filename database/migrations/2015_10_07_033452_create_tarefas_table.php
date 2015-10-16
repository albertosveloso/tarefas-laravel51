<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTarefasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tarefas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('descricao', 200);
            $table->boolean('apagado');
            $table->boolean('cancelado');
            $table->integer('tempoestimado')->unsigned();
            $table->integer('tempogasto')->unsigned();
            $table->integer('necessidade_id')->unsigned();
            $table->integer('statustarefa_id')->unsigned();
            $table->integer('tipostarefa_id')->unsigned();
            $table->integer('user_id')->unsigned();
            
            //Foreign Keys
            $table->foreign('necessidade_id')->references('id')->on('necessidades')->onUpdate('cascade');
            $table->foreign('statustarefa_id')->references('id')->on('status_tarefas')->onUpdate('cascade');
            $table->foreign('tipostarefa_id')->references('id')->on('tipos_tarefas')->onUpdate('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onUpdate('cascade');
            
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('tarefas');
    }
}
