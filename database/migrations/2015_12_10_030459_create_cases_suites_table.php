<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCasesSuitesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('case_suite', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();

            $table->integer('case_id')->unsigned();
            $table->integer('suite_id')->unsigned();
            $table->foreign('case_id')->references('id')->on('cases');
            $table->foreign('suite_id')->references('id')->on('suites');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('case_suite');
    }
}
