<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEquiposTable extends Migration
{
    public function up()
    {
        Schema::create('equipos', function (Blueprint $table) {
            $table->increments('ID');
            $table->unsignedInteger('MarcaID');
            $table->string('Modelo', 100)->nullable();
            $table->string('NumeroSerie', 50)->nullable();
            $table->date('FechaCompra')->nullable();
            $table->text('Descripcion')->nullable();
            $table->string('Estado', 50)->nullable();

            $table->foreign('MarcaID')->references('ID')->on('marcas')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('equipos');
    }
}
