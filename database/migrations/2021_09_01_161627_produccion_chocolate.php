<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ProduccionChocolate extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produccion_chocolate', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('cantidad_chocolate')->nullable();
            $table->string('fecha_finalizacion')->nullable();
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
        Schema::dropIfExists('produccionChocolate');
    }
}
