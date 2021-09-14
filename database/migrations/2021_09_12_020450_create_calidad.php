<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCalidad extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('calidad', function (Blueprint $table) {
            $table->float('ColTotal1', 10);
            $table->float('ColTotal2', 10);
            $table->float('HDL1', 10);
            $table->float('HDL2', 10);
            $table->float('LDL1', 10);
            $table->float('LDL2', 10);
            $table->float('Trigliceridos1', 10);
            $table->float('Trigliceridos2', 10);
            $table->string('fecha', 20);
            $table->string('hora', 10);
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
        Schema::dropIfExists('calidad');
    }
}
