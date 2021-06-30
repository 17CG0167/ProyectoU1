<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ComprasMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('compras', function (Blueprint $table) {
            $table->increments('id');
            $table->string('productos');
            $table->double('cantidadProductos');
            $table->integer('producto')->unsigned();
            $table->integer('usuario')->unsigned();
            $table->double('total');
            $table->rememberToken();
            $table->timestamps();
           
            $table->foreign('producto')->references('id')->on('productos');
            $table->foreign('usuario')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('compras');
    }
}
