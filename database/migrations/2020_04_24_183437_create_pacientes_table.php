<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePacientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pacientes', function (Blueprint $table) {
          $table->bigIncrements('id');
          $table->string('nombre');
          $table->string('apellido');
          $table->integer('edad');
          $table->string('sexo');
          $table->string('historia_clinica');
          $table->integer('telefono');
          $table->string('email');
          $table->bigInteger('medico_id')->unsigned();

          $table->foreign('medico_id')
                ->references('id')
                ->on('medicos');
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
        Schema::dropIfExists('pacientes');
    }
}
