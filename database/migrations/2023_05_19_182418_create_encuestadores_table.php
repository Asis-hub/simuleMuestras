<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ModifySurveyorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('surveyors', function (Blueprint $table) {
            $table->float('error');
            $table->float('confiabilidad');
            $table->float('proporcion_necesaria');
            $table->float('proporcion_restante');
            $table->integer('estratos');
            $table->float('encuestadores');
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
        Schema::table('surveyors', function (Blueprint $table) {
            $table->dropColumn('error');
            $table->dropColumn('confiabilidad');
            $table->dropColumn('p_necesaria');
            $table->dropColumn('p_restante');
            $table->dropColumn('estratos');
         $table->dropColumn('respuesta');
         $table->dropColumn('autor');
         
        });
    }
}
