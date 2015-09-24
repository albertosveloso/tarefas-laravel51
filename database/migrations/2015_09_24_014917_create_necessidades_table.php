<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNecessidadesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('necessidades', function (Blueprint $table) {
            $table->increments('id')->index();

            $table->unsignedInteger('projeto_id');
            $table->foreign('projeto_id')->references('id')->on('projetos')->onUpdate('cascade')->onDelete('cascade');

            $table->string('descricao', 100);
            $table->unsignedInteger('prioridade');
            $table->boolean('apagado');
            $table->boolean('cancelado');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('necessidades');
    }
}
