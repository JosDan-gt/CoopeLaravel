<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTecnicosTable extends Migration
{
    public function up()
    {
        Schema::create('tecnicos', function (Blueprint $table) {
            $table->increments('ID');
            $table->string('Nombre', 100);
            $table->string('Especialidad', 100)->nullable();
            $table->string('CorreoElectronico', 100)->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('tecnicos');
    }
}
