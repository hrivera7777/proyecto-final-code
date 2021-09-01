<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Chocolate extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chocolate', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombre');
            $table->string('cantidad');
            $table->string('descripcion');
            $table->string('fecha_vencimiento');
            $table->integer('id_produccion')->unsigned()->nullable();

            $table->foreign('id_produccion')->references('id')->on('produccion_chocolate')->onDelete('cascade');

            $table->timestamps();
        });
        //
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('chocolate');
    }
}
