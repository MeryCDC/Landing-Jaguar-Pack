<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDomiciliosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('domicilios', function (Blueprint $table) {
            $table->id();
            $table->integer('num_domicilio');
            $table->string('calle' , 100);
            $table->integer('numero_exterior');
            $table->integer('numero_interior')->nullable();;
            $table->string('entre_calles', 200);
            $table->string('colonia' , 70);
            $table->integer('codigo_postal');
            $table->string('estado', 70);
            $table->string('ciudad', 70);
            $table->string('referencias', 255);
            $table->timestamps();

            //declarar nuestra llaves foraneas dentro de la amigración
            $table->unsignedBigInteger('id_cliente');
            $table->foreign('id_cliente')->references('id')->on('clientes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('domicilios');
    }
}
