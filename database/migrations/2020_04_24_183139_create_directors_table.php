<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDirectorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('directors', function (Blueprint $table) {
          $table->bigIncrements('id');
          $table->string('nombre');
          $table->string('apellido');
          $table->integer('edad');
          $table->integer('telefono');
          $table->string('email');
          $table->bigInteger('hospital_id')->unsigned();

        $table->foreign('hospital_id')
              ->references('id')
              ->on('hospitals');
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
        Schema::dropIfExists('directors');
    }
}
