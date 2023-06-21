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
        Schema::create('muestra_estratificada', function (Blueprint $table) {
            $table->id();
            $table->float('b_variable');
            $table->float('confianza_z2');
            $table->float('ni_mayuscula_total');
            $table->float('ni_mayuscula_por_raiz_total');
            $table->float('numerador');
            $table->float('b_cuadrada_variable');
            $table->float('ni_mayuscula_por_pi_por_qi_total');
            $table->float('n_mayuscula_cuadrada');
            $table->float('denominador');
            $table->float('n_redondeado');
            $table->float('n_variable');
            $table->float('ni_minuscula_total');
            $table->float('ni_mayuscula_1');
            $table->float('p_variable_1');
            $table->float('q_variable_1');
            $table->float('ni_mayuscula_2')->nullable();
            $table->float('p_variable_2')->nullable();
            $table->float('q_variable_2')->nullable();
            $table->float('ni_mayuscula_3')->nullable();
            $table->float('p_variable_3')->nullable();
            $table->float('q_variable_3')->nullable();
            $table->float('ni_mayuscula_4')->nullable();
            $table->float('p_variable_4')->nullable();
            $table->float('q_variable_4')->nullable();
            $table->float('ni_mayuscula_5')->nullable();
            $table->float('p_variable_5')->nullable();
            $table->float('q_variable_5')->nullable();
            $table->float('ni_mayuscula_6')->nullable();
            $table->float('p_variable_6')->nullable();
            $table->float('q_variable_6')->nullable();
            $table->float('ni_mayuscula_7')->nullable();
            $table->float('p_variable_7')->nullable();
            $table->float('q_variable_7')->nullable();
            $table->float('ni_mayuscula_8')->nullable();
            $table->float('p_variable_8')->nullable();
            $table->float('q_variable_8')->nullable();
            $table->float('ni_mayuscula_9')->nullable();
            $table->float('p_variable_9')->nullable();
            $table->float('q_variable_9')->nullable();
            $table->float('ni_mayuscula_10')->nullable();
            $table->float('p_variable_10')->nullable();
            $table->float('q_variable_10')->nullable();
            $table->float('ni_mayuscula_11')->nullable();
            $table->float('p_variable_11')->nullable();
            $table->float('q_variable_11')->nullable();
            $table->float('ni_mayuscula_12')->nullable();
            $table->float('p_variable_12')->nullable();
            $table->float('q_variable_12')->nullable();
            $table->float('ni_mayuscula_13')->nullable();
            $table->float('p_variable_13')->nullable();
            $table->float('q_variable_13')->nullable();
            $table->float('ni_mayuscula_14')->nullable();
            $table->float('p_variable_14')->nullable();
            $table->float('q_variable_14')->nullable();
            $table->float('ni_mayuscula_15')->nullable();
            $table->float('p_variable_15')->nullable();
            $table->float('q_variable_15')->nullable();
            $table->float('ni_mayuscula_16')->nullable();
            $table->float('p_variable_16')->nullable();
            $table->float('q_variable_16')->nullable();
            $table->float('ni_mayuscula_17')->nullable();
            $table->float('p_variable_17')->nullable();
            $table->float('q_variable_17')->nullable();
            $table->float('ni_mayuscula_18')->nullable();
            $table->float('p_variable_18')->nullable();
            $table->float('q_variable_18')->nullable();
            $table->float('ni_mayuscula_19')->nullable();
            $table->float('p_variable_19')->nullable();
            $table->float('q_variable_19')->nullable();
            $table->float('ni_mayuscula_20')->nullable();
            $table->float('p_variable_20')->nullable();
            $table->float('q_variable_20')->nullable();
            $table->float('ni_mayuscula_21')->nullable();
            $table->float('p_variable_21')->nullable();
            $table->float('q_variable_21')->nullable();
            $table->float('ni_mayuscula_22')->nullable();
            $table->float('p_variable_22')->nullable();
            $table->float('q_variable_22')->nullable();
            $table->float('ni_mayuscula_23')->nullable();
            $table->float('p_variable_23')->nullable();
            $table->float('q_variable_23')->nullable();
            $table->float('ni_mayuscula_24')->nullable();
            $table->float('p_variable_24')->nullable();
            $table->float('q_variable_24')->nullable();
            $table->float('ni_mayuscula_25')->nullable();
            $table->float('p_variable_25')->nullable();
            $table->float('q_variable_25')->nullable();
            $table->float('ni_mayuscula_26')->nullable();
            $table->float('p_variable_26')->nullable();
            $table->float('q_variable_26')->nullable();
            $table->float('ni_mayuscula_27')->nullable();
            $table->float('p_variable_27')->nullable();
            $table->float('q_variable_27')->nullable();
            $table->float('ni_mayuscula_28')->nullable();
            $table->float('p_variable_28')->nullable();
            $table->float('q_variable_28')->nullable();
            $table->float('ni_mayuscula_29')->nullable();
            $table->float('p_variable_29')->nullable();
            $table->float('q_variable_29')->nullable();
            $table->float('ni_mayuscula_30')->nullable();
            $table->float('p_variable_30')->nullable();
            $table->float('q_variable_30')->nullable();
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
        Schema::dropIfExists('muestra_estratificada');
    }
};
