<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class documento extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('documento', function (Blueprint $table) {
            $table->increments('id');
            $table->enum('tipo_documento',['CC','CE']);
            $table->string('numero_documento');
            $table->string('nombres');
            $table->string('apellidos');
            $table->string('departamento');
            $table->string('ciudad');
            $table->string('direccion');
            $table->string('celular');
            $table->string('correo');
            $table->string('nombre_in');
            $table->string('departamento_in');
            $table->string('ciudad_in');
            $table->string('vereda_in');
            $table->string('matricula_in')->nullable();
            $table->enum('Ciudad_registro_in',['Chiquinquira','Duitama','El Cocuy','Garagoa','Guateque','Miraflores','Moniquira','Puerto Boyaca','Ramiriqui','Santa Rosa de Viterbo','Soata','Socha ','Sogamoso ','Tunja ',]);
            $table->text('hechos')->nullable();
            $table->string('abogado');
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
        //
    }
}
