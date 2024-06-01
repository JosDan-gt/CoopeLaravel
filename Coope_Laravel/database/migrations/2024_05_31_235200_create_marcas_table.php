<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMarcasTable extends Migration
{
    public function up()
    {
        Schema::create('marcas', function (Blueprint $table) {
            $table->increments('ID');
            $table->string('Nombre', 100);
        });
    }

    public function down()
    {
        Schema::dropIfExists('marcas');
    }
}
