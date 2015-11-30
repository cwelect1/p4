<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTestRunsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Create the test_runs table.
        Schema::create('test_runs', function (Blueprint $table) {

            # PK, Autoincrement and 'created_at'/'updated_at' fields.
            $table->increments('id');
            $table->timestamps();

            # The rest of the fields...
            $table->string('name');
            $table->string('description');
            $table->dateTime('start_date_time');
            $table->dateTime('end_date_time');
            $table->integer('partner_id');
            $table->integer('application_id');
            $table->integer('environment_id');
            $table->integer('project_id');
            $table->integer('sprint_id');
            $table->integer('os_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Drop the table.
        Schema::drop('test_runs');
    }
}
