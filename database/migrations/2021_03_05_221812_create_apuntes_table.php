<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApuntesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('apuntes', function (Blueprint $table) {
            $table->id();
            $table->integer('numero_tema');
            $table->string('tema');
            $table->foreignId('materias_id')->constrained();
            $table->text('desarrollo');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('apuntes');
    }
}
