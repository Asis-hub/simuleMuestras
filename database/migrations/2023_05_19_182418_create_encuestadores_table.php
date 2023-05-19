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
    Schema::create('surveyors', function (Blueprint $table) {
        $table->id();
        $table->decimal('error', $precision = 8, $scale = 2);
        $table->decimal('confiabilidad', $precision = 8, $scale = 2);
        $table->decimal('proporcion_necesaria', $precision = 8, $scale = 2);
        $table->decimal('proporcion_restante', $precision = 8, $scale = 2);
        $table->decimal('estratos', $precision = 8, $scale = 2);
        $table->decimal('encuestadores', $precision = 8, $scale = 2);
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
        Schema::dropIfExists('surveyors');
    }
};