<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class InventarioSuministro extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inventario_suministro', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('cantidades')->nullable();
            $table->integer('id_pedido')->nullable();    
            $table->bigInteger('id_suministro')->nullable();


            $table->foreign('id_suministro')->references('id')->on('suministro')->onDelete('set null');
            
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
        Schema::disableForeignKeyConstraints();
        Schema::dropIfExists('inventarioSuministro');
        Schema::enableForeignKeyConstraints();
    }
}
