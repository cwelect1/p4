<?php

use Illuminate\Database\Seeder;

class TestCasesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('test_cases')->insert([
          'created_at' => Carbon\Carbon::now()->toDateTimeString(),
          'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
          'name' => 'TC_GradeRCStudents',
          'tc_number' => null,
          'start_date_time' => Carbon\Carbon::now()->toDateTimeString(),
          'end_date_time' => Carbon\Carbon::now()->toDateTimeString(),
          'Status' => 1,
          'parameters' => 'username=cweinberg@hbsstg.org, pwd=423de23dss32, authenticate=yes',
          'messages' => null,
          'failure_msg' => null
        ]);

        DB::table('test_cases')->insert([
          'created_at' => Carbon\Carbon::now()->toDateTimeString(),
          'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
          'name' => 'TC_GradeRCStudents',
          'tc_number' => 1,
          'start_date_time' => Carbon\Carbon::now()->toDateTimeString(),
          'end_date_time' => Carbon\Carbon::now()->toDateTimeString(),
          'Status' => 2,
          'parameters' => 'username=eberntson@hbsstg.org, pwd=423de23dss32, authenticate=yes',
          'messages' => 'step 1 - clicked "go"',
          'failure_msg' => null
        ]);

        DB::table('test_cases')->insert([
          'created_at' => Carbon\Carbon::now()->toDateTimeString(),
          'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
          'name' => 'TC_GradeRCStudents',
          'tc_number' => null,
          'start_date_time' => Carbon\Carbon::now()->toDateTimeString(),
          'end_date_time' => Carbon\Carbon::now()->toDateTimeString(),
          'Status' => 3,
          'parameters' => 'username=ghalstead@hbsstg.org, pwd=423de23dss32, authenticate=yes',
          'messages' => null,
          'failure_msg' => null
        ]);

    }
}
