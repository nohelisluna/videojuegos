<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('videojuegos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_juego');
            $table->text('descripcion');
            $table->bigInteger('categorias_id')->unsigned();
            $table->foreign('categorias_id')->references('id')->on('categorias');
            $table->bigInteger('plataformas_id')->unsigned();
            $table->foreign('plataformas_id')->references('id')->on('plataformas');
            $table->bigInteger('users_id')->unsigned();
            $table->foreign('users_id')->references('id')->on('users');
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
        Schema::dropIfExists('videojuegos');
    }
};
