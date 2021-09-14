<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePatients extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patients', function (Blueprint $table) {
            $table->id();
            $table->string('documento',20);
            $table->string('nombre',50);
            $table->string('apellido',50);
            $table->string('telefono',15);
            $table->string('edad',3);
            $table->string('eps',20);
            $table->string('correo',50);
            $table->string('rh',3);
            $table->float('col',10);
            $table->float('hdl',10);
            $table->float('ldl',10);
            $table->float('trigliceridos',10);
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
        Schema::dropIfExists('patients');
    }
}
