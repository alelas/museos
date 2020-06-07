<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBienesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bienes', function (Blueprint $table) {
            $table->id();
            $table->string("nombre", 250)->nullable();
            $table->text("descrip")->nullable();
            $table->string("coleccion", 250)->nullable();
            $table->string("estado", 50)->nullable();
            $table->string("productor", 150)->nullable();
            $table->string("cronologia", 200)->nullable();
            $table->string("ubicacion", 50)->nullable();
            $table->string("tipouno", 50)->nullable();
            $table->string("tipodos", 50)->nullable();
            $table->string("tipotres", 50)->nullable();
            $table->string("tipocuatro", 50)->nullable();
            $table->string("tipocinco", 50)->nullable();
            $table->string("tipobjeto", 200)->nullable();
            $table->string("procedencia", 100)->nullable();
            $table->string("comunidad", 100)->nullable();
            $table->string("foto", 20)->nullable();
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
        Schema::dropIfExists('bienes');
    }
}
