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
        Schema::create('renta', function (Blueprint $table) {
            $table->id('idrenta');
            $table->date('fecha_registro');
            $table->date('fecha_devolucion');
            $table->date('fecha_entrega');
            $table->unsignedBigInteger('idpelicula')->unsigned()->nullable();
            $table->unsignedBigInteger('idcliente')->unsigned()->nullable();

            $table->foreign('idpelicula')->references('idpelicula')->on('pelicula')->onDelete('set null');

            $table->foreign('idcliente')->references('idcliente')->on('cliente')->onDelete('set null');
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
        Schema::dropIfExists('renta');
    }
};
