<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('terapeutas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->string('a_paterno');
            $table->string('a_materno');
            $table->string('correo');
            $table->string('telefono');
            $table->string('foto');

            //

            //verificar que los documentos que estan establecidos se puedan cargar videos y audio o archivos en general
            //todos los archivos deben estar en linea pero se deben descargar revisar si se puede reproducir los archivos
            //buscar accesoria donde no se pueda descargar la informacion solo visualiar, no se podra realizar ningun tupo de copia en todos los archivos de que se esta establecido para la realizacion de lesot ler
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('terapeutas');
    }
};
