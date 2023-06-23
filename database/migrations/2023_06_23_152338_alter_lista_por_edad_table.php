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
        Schema::table('lista_por_edads', function (Blueprint $table) {
            $table->integer('encuestadores_total');
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('lista_por_edads', function (Blueprint $table) {
            $table->dropColumn(['encuestadores_total']);
            });
    }
};
