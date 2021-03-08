<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMateriasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('carreras', function (Blueprint $table) {
            $table->id();
            $table->string('carrera');
            $table->string('slug')->unique();
        });
        Schema::create('materias', function (Blueprint $table) {
            $table->id();
            $table->foreignId('carrera_id');
            $table->integer('year');
            $table->string('materia');
            $table->string('slug')->unique();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('carrera');
        Schema::dropIfExists('materias');
    }
}
