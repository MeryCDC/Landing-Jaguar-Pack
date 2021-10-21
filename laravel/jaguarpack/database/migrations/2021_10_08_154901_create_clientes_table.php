<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->id();
            $table->string('nombres' , 100);
            $table->string('apellidos' , 100);
            $table->string('calle' , 100);
            $table->integer('numero_exterior');
            $table->integer('numero_interior')->nullable();;
            $table->string('entre_calles', 200);
            $table->string('colonia' , 70);
            $table->integer('codigo_postal');
            $table->string('estado', 70);
            $table->string('ciudad', 70);
            $table->string('telefono', 35);
            $table->string('referencias', 255);
            $table->string('telefono_auxiliar', 35);
            $table->timestamps();

            //declarar nuestra llaves foraneas dentro de la amigración
            $table->unsignedBigInteger('id_usuarios');
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
        Schema::dropIfExists('clientes');
    }
}
