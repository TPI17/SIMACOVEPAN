<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DefectuosoPT extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     public function up()
    {
        Schema::create('defectuosoPT', function (Blueprint $table) {
            $table->increments('id');
            $table->double('cantidad_DPT', 5 , 2);
            $table->string('descripcion_DPT');
            $table->date('fecha_DPT');
            $table->integer('id_InventarioPT')->unsigned();
            $table->foreign('id_InventarioPT')->references('id')->on('inventarioProductoTerminado');
            $table->rememberToken();
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
        Schema::drop('defectuosoPT');
    }
}
