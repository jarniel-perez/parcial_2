<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMedicablesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medicables', function (Blueprint $table) {
          $table->bigIncrements('id');
          $table->bigInteger('medico_id')->unsigned();
          $table->integer('medicable_id')->unsigned();
          $table->string('medicable_type');
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
        Schema::dropIfExists('medicables');
    }
}
