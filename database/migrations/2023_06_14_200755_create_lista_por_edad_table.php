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
        Schema::create('lista_por_edad', function (Blueprint $table) {
            $table->id();
            $table->string('entidad');
            $table->string('municipio');
            $table->string('url_lista_por_edad');
            $table->float('lista_total');
            $table->float('lista_mujeres_18_24');
            $table->float('lista_hombres_18_24');
            $table->float('lista_mujeres_25_34');
            $table->float('lista_hombres_25_34');
            $table->float('lista_mujeres_35_49');
            $table->float('lista_hombres_35_49');
            $table->float('lista_mujeres_50_64');
            $table->float('lista_hombres_50_64');
            $table->float('lista_mujeres_65_mas');
            $table->float('lista_hombres_65_mas');
            $table->float('proporcion_mujeres_18_24');
            $table->float('proporcion_hombres_18_24');
            $table->float('proporcion_mujeres_25_34');
            $table->float('proporcion_hombres_25_34');
            $table->float('proporcion_mujeres_35_49');
            $table->float('proporcion_hombres_35_49');
            $table->float('proporcion_mujeres_50_64');
            $table->float('proporcion_hombres_50_64');
            $table->float('proporcion_mujeres_65_mas');
            $table->float('proporcion_hombres_65_mas');
            $table->float('encuestadores_mujeres_18_24');
            $table->float('encuestadores_hombres_18_24');
            $table->float('encuestadores_mujeres_25_34');
            $table->float('encuestadores_hombres_25_34');
            $table->float('encuestadores_mujeres_35_49');
            $table->float('encuestadores_hombres_35_49');
            $table->float('encuestadores_mujeres_50_64');
            $table->float('encuestadores_hombres_50_64');
            $table->float('encuestadores_mujeres_65_mas');
            $table->float('encuestadores_hombres_65_mas');
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
        Schema::dropIfExists('lista_por_edad');
    }
};
