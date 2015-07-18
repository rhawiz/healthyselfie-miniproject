<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProgrammeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('programme', function (Blueprint $table) {
            $table->increments('id');
			$table->string('name');
			$table->double('price_usd')->unique();
			$table->string('gender');
			$table->integer('weeks');
			$table->integer('training_days');
			$table->string('description');
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
        Schema::drop('programme');
    }
}
