<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServiciosTable extends Migration
{
    public function up()
    {
        Schema::create('servicios', function (Blueprint $table) {
            $table->increments('ID');
            $table->unsignedInteger('ClienteID');
            $table->unsignedInteger('TecnicoAsignadoID')->nullable();
            $table->unsignedInteger('EquipoID');

            $table->date('FechaRecepcion');
            $table->text('ProblemaReportado');
            $table->string('Estado', 50);
            $table->text('Diagnostico')->nullable();
            $table->text('SolucionRealizada')->nullable();
            $table->date('FechaEntrega')->nullable();

            $table->foreign('ClienteID')->references('ID')->on('clientes')->onDelete('cascade');
            $table->foreign('TecnicoAsignadoID')->references('ID')->on('tecnicos')->onDelete('set null');
            $table->foreign('EquipoID')->references('ID')->on('equipos')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('servicios');
    }
}
