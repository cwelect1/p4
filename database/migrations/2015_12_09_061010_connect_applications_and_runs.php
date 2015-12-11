<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ConnectApplicationsAndRuns extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Link Application records with runs.
        Schema::table('runs', function (Blueprint $table) {

            # Add a new INT field called `author_id` that has to be unsigned (i.e. positive)
            $table->integer('application_id')->unsigned();

            # This field `author_id` is a foreign key that connects to the `id` field in the `authors` table
            $table->foreign('application_id')->references('id')->on('applications');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Drop the relationship.
        Schema::table('runs', function (Blueprint $table) {

            $table->dropForeign('runs_application_id_foreign');

            $table->dropColumn('application_id');
        });
    }
}
