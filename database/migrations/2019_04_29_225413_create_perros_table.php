<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePerrosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('perros', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('raza');
            $table->string('tamaño');
            $table->integer('edad');
            $table->text('contacto');
            $table->text('comentarios');
            $table->boolean('publicado');
            $table->string('img');
            $table->timestamps();
            $table->string('sexo');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('perros');
    }
}
