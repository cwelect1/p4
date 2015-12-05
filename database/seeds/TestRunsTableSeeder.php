<?php

use Illuminate\Database\Seeder;

class TestRunsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('test_runs')->insert([
          'created_at' => Carbon\Carbon::now()->toDateTimeString(),
          'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
          'name' => 'Test Run #1',
          'description' => 'This is the description.',
          'start_date_time' => Carbon\Carbon::now()->toDateTimeString(),
          'end_date_time' => Carbon\Carbon::now()->toDateTimeString(),
          'partner_id' => 1,
          'application_id' => 1,
          'environment_id' => null
        ]);

    }
}
