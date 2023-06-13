<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lista_por_generos', function (Blueprint $table) {
            $table->id('id');
            $table->string('entidad');
            $table->string('municipio');
            $table->string('url_lista_por_genero');
            $table->string('lista_mujeres');
            $table->string('lista_hombres');
            $table->string('lista_total');
            $table->string('autor');
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
        Schema::dropIfExists('lista_por_genero');
    }
};
