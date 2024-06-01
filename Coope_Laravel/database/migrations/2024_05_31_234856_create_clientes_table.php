<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientesTable extends Migration
{
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->increments('ID');
            $table->string('Nombre', 100);
            $table->string('Direccion', 255)->nullable();
            $table->string('Telefono', 20)->nullable();
            $table->string('CorreoElectronico', 100)->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('clientes');
    }
}
