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
            $table->bigInteger('categorias_id')->unsigned()->nullable();
            $table->foreign('categorias_id')->references('id')->on('categorias')->onDelete('set null');
            $table->bigInteger('plataformas_id')->unsigned()->nullable();
            $table->foreign('plataformas_id')->references('id')->on('plataformas')->onDelete('set null');
            $table->bigInteger('users_id')->unsigned()->nullable();
            $table->foreign('users_id')->references('id')->on('users')->onDelete('set null');
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