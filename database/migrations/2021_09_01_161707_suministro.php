<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Suministro extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('suministro', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('tipo_suministro')->nullable();
            $table->integer('peso')->unsigned()->nullable();
            $table->string('fecha_vencimiento')->nullable();
            $table->boolean('disponible')->nullable();
            $table->integer('unidades')->unsigned()->nullable();
        
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
        Schema::disableForeignKeyConstraints();
        Schema::dropIfExists('suministro');
        Schema::enableForeignKeyConstraints();
    }
}
