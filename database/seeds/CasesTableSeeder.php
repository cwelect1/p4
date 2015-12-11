<?php

use Illuminate\Database\Seeder;

class CasesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cases')->insert([
          'created_at' => Carbon\Carbon::now()->toDateTimeString(),
          'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
          'name' => 'TC_GradesSmoke1',
          'tc_number' => null,
          'start_date_time' => Carbon\Carbon::now()->toDateTimeString(),
          'end_date_time' => Carbon\Carbon::now()->toDateTimeString(),
          'Status' => 1,
          'parameters' => 'username=cweinberg@hbsstg.org, pwd=423de23dss32, authenticate=yes',
          'messages' => null,
          'failure_msg' => null
        ]);

        DB::table('cases')->insert([
          'created_at' => Carbon\Carbon::now()->toDateTimeString(),
          'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
          'name' => 'TC_GradesSmoke1',
          'tc_number' => null,
          'start_date_time' => Carbon\Carbon::now()->toDateTimeString(),
          'end_date_time' => Carbon\Carbon::now()->toDateTimeString(),
          'Status' => 1,
          'parameters' => 'username=cweinberg@hbsstg.org, pwd=423de23dss32, authenticate=yes',
          'messages' => null,
          'failure_msg' => null
        ]);

        DB::table('cases')->insert([
          'created_at' => Carbon\Carbon::now()->toDateTimeString(),
          'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
          'name' => 'TC_AtlasSmoke1',
          'tc_number' => null,
          'start_date_time' => Carbon\Carbon::now()->toDateTimeString(),
          'end_date_time' => Carbon\Carbon::now()->toDateTimeString(),
          'Status' => 1,
          'parameters' => 'username=cweinberg@hbsstg.org, pwd=423de23dss32, authenticate=yes',
          'messages' => null,
          'failure_msg' => null
        ]);

        DB::table('cases')->insert([
          'created_at' => Carbon\Carbon::now()->toDateTimeString(),
          'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
          'name' => 'TC_AtlasSmoke1',
          'tc_number' => null,
          'start_date_time' => Carbon\Carbon::now()->toDateTimeString(),
          'end_date_time' => Carbon\Carbon::now()->toDateTimeString(),
          'Status' => 1,
          'parameters' => 'username=cweinberg@hbsstg.org, pwd=423de23dss32, authenticate=yes',
          'messages' => null,
          'failure_msg' => null
        ]);

        DB::table('cases')->insert([
          'created_at' => Carbon\Carbon::now()->toDateTimeString(),
          'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
          'name' => 'TC_QuickCodesSmoke1',
          'tc_number' => null,
          'start_date_time' => Carbon\Carbon::now()->toDateTimeString(),
          'end_date_time' => Carbon\Carbon::now()->toDateTimeString(),
          'Status' => 1,
          'parameters' => 'username=cweinberg@hbsstg.org, pwd=423de23dss32, authenticate=yes',
          'messages' => null,
          'failure_msg' => null
        ]);

        DB::table('cases')->insert([
          'created_at' => Carbon\Carbon::now()->toDateTimeString(),
          'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
          'name' => 'TC_QuickCodesSmoke2',
          'tc_number' => null,
          'start_date_time' => Carbon\Carbon::now()->toDateTimeString(),
          'end_date_time' => Carbon\Carbon::now()->toDateTimeString(),
          'Status' => 1,
          'parameters' => 'username=cweinberg@hbsstg.org, pwd=423de23dss32, authenticate=yes',
          'messages' => null,
          'failure_msg' => null
        ]);

        DB::table('cases')->insert([
          'created_at' => Carbon\Carbon::now()->toDateTimeString(),
          'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
          'name' => 'TC_QuickCodesSmoke3',
          'tc_number' => null,
          'start_date_time' => Carbon\Carbon::now()->toDateTimeString(),
          'end_date_time' => Carbon\Carbon::now()->toDateTimeString(),
          'Status' => 1,
          'parameters' => 'username=cweinberg@hbsstg.org, pwd=423de23dss32, authenticate=yes',
          'messages' => null,
          'failure_msg' => null
        ]);

        DB::table('cases')->insert([
          'created_at' => Carbon\Carbon::now()->toDateTimeString(),
          'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
          'name' => 'TC_QuickCodesSmoke4',
          'tc_number' => null,
          'start_date_time' => Carbon\Carbon::now()->toDateTimeString(),
          'end_date_time' => Carbon\Carbon::now()->toDateTimeString(),
          'Status' => 1,
          'parameters' => 'username=cweinberg@hbsstg.org, pwd=423de23dss32, authenticate=yes',
          'messages' => null,
          'failure_msg' => null
        ]);

        DB::table('cases')->insert([
          'created_at' => Carbon\Carbon::now()->toDateTimeString(),
          'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
          'name' => 'TC_GradesSmoke1',
          'tc_number' => 1,
          'start_date_time' => Carbon\Carbon::now()->toDateTimeString(),
          'end_date_time' => Carbon\Carbon::now()->toDateTimeString(),
          'Status' => 2,
          'parameters' => 'username=eberntson@hbsstg.org, pwd=423de23dss32, authenticate=yes',
          'messages' => 'no such element found exception.',
          'failure_msg' => 'full stack trace'
        ]);

        DB::table('cases')->insert([
          'created_at' => Carbon\Carbon::now()->toDateTimeString(),
          'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
          'name' => 'TC_GradesSmoke2',
          'tc_number' => 1,
          'start_date_time' => Carbon\Carbon::now()->toDateTimeString(),
          'end_date_time' => Carbon\Carbon::now()->toDateTimeString(),
          'Status' => 2,
          'parameters' => 'username=eberntson@hbsstg.org, pwd=423de23dss32, authenticate=yes',
          'messages' => 'no such element found exception.',
          'failure_msg' => 'full stack trace'
        ]);

        DB::table('cases')->insert([
          'created_at' => Carbon\Carbon::now()->toDateTimeString(),
          'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
          'name' => 'TC_GradesSmoke2',
          'tc_number' => null,
          'start_date_time' => Carbon\Carbon::now()->toDateTimeString(),
          'end_date_time' => Carbon\Carbon::now()->toDateTimeString(),
          'Status' => 3,
          'parameters' => 'username=ghalstead@hbsstg.org, pwd=423de23dss32, authenticate=yes',
          'messages' => null,
          'failure_msg' => null
        ]);

        DB::table('cases')->insert([
          'created_at' => Carbon\Carbon::now()->toDateTimeString(),
          'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
          'name' => 'TC_GradesSmoke2',
          'tc_number' => null,
          'start_date_time' => Carbon\Carbon::now()->toDateTimeString(),
          'end_date_time' => Carbon\Carbon::now()->toDateTimeString(),
          'Status' => 3,
          'parameters' => 'username=ghalstead@hbsstg.org, pwd=423de23dss32, authenticate=yes',
          'messages' => null,
          'failure_msg' => null
        ]);

        DB::table('cases')->insert([
          'created_at' => Carbon\Carbon::now()->toDateTimeString(),
          'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
          'name' => 'TC_GradesSmoke3',
          'tc_number' => null,
          'start_date_time' => Carbon\Carbon::now()->toDateTimeString(),
          'end_date_time' => Carbon\Carbon::now()->toDateTimeString(),
          'Status' => 3,
          'parameters' => 'username=ghalstead@hbsstg.org, pwd=423de23dss32, authenticate=yes',
          'messages' => null,
          'failure_msg' => null
        ]);

        DB::table('cases')->insert([
          'created_at' => Carbon\Carbon::now()->toDateTimeString(),
          'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
          'name' => 'TC_GradesSmoke3',
          'tc_number' => null,
          'start_date_time' => Carbon\Carbon::now()->toDateTimeString(),
          'end_date_time' => Carbon\Carbon::now()->toDateTimeString(),
          'Status' => 3,
          'parameters' => 'username=ghalstead@hbsstg.org, pwd=423de23dss32, authenticate=yes',
          'messages' => null,
          'failure_msg' => null
        ]);

        DB::table('cases')->insert([
          'created_at' => Carbon\Carbon::now()->toDateTimeString(),
          'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
          'name' => 'TC_GradesSmoke3',
          'tc_number' => null,
          'start_date_time' => Carbon\Carbon::now()->toDateTimeString(),
          'end_date_time' => Carbon\Carbon::now()->toDateTimeString(),
          'Status' => 3,
          'parameters' => 'username=ghalstead@hbsstg.org, pwd=423de23dss32, authenticate=yes',
          'messages' => null,
          'failure_msg' => null
        ]);

        DB::table('cases')->insert([
          'created_at' => Carbon\Carbon::now()->toDateTimeString(),
          'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
          'name' => '1TC_GradesSmoke4',
          'tc_number' => null,
          'start_date_time' => Carbon\Carbon::now()->toDateTimeString(),
          'end_date_time' => Carbon\Carbon::now()->toDateTimeString(),
          'Status' => 3,
          'parameters' => 'username=ghalstead@hbsstg.org, pwd=423de23dss32, authenticate=yes',
          'messages' => null,
          'failure_msg' => null
        ]);

        DB::table('cases')->insert([
          'created_at' => Carbon\Carbon::now()->toDateTimeString(),
          'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
          'name' => 'TC_QuickCodesSmoke1',
          'tc_number' => null,
          'start_date_time' => Carbon\Carbon::now()->toDateTimeString(),
          'end_date_time' => Carbon\Carbon::now()->toDateTimeString(),
          'Status' => 1,
          'parameters' => 'username=cweinberg@hbsstg.org, pwd=423de23dss32, authenticate=yes',
          'messages' => null,
          'failure_msg' => null
        ]);

        DB::table('cases')->insert([
          'created_at' => Carbon\Carbon::now()->toDateTimeString(),
          'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
          'name' => 'TC_QuickCodesSmoke2',
          'tc_number' => null,
          'start_date_time' => Carbon\Carbon::now()->toDateTimeString(),
          'end_date_time' => Carbon\Carbon::now()->toDateTimeString(),
          'Status' => 1,
          'parameters' => 'username=cweinberg@hbsstg.org, pwd=423de23dss32, authenticate=yes',
          'messages' => null,
          'failure_msg' => null
        ]);

        DB::table('cases')->insert([
          'created_at' => Carbon\Carbon::now()->toDateTimeString(),
          'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
          'name' => 'TC_QuickCodesSmoke3',
          'tc_number' => null,
          'start_date_time' => Carbon\Carbon::now()->toDateTimeString(),
          'end_date_time' => Carbon\Carbon::now()->toDateTimeString(),
          'Status' => 1,
          'parameters' => 'username=cweinberg@hbsstg.org, pwd=423de23dss32, authenticate=yes',
          'messages' => null,
          'failure_msg' => null
        ]);

        DB::table('cases')->insert([
          'created_at' => Carbon\Carbon::now()->toDateTimeString(),
          'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
          'name' => 'TC_QuickCodesSmoke4',
          'tc_number' => null,
          'start_date_time' => Carbon\Carbon::now()->toDateTimeString(),
          'end_date_time' => Carbon\Carbon::now()->toDateTimeString(),
          'Status' => 1,
          'parameters' => 'username=cweinberg@hbsstg.org, pwd=423de23dss32, authenticate=yes',
          'messages' => null,
          'failure_msg' => null
        ]);

        DB::table('cases')->insert([
          'created_at' => Carbon\Carbon::now()->toDateTimeString(),
          'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
          'name' => 'TC_QuickCodesSmoke1',
          'tc_number' => null,
          'start_date_time' => Carbon\Carbon::now()->toDateTimeString(),
          'end_date_time' => Carbon\Carbon::now()->toDateTimeString(),
          'Status' => 1,
          'parameters' => 'username=cweinberg@hbsstg.org, pwd=423de23dss32, authenticate=yes',
          'messages' => null,
          'failure_msg' => null
        ]);

        DB::table('cases')->insert([
          'created_at' => Carbon\Carbon::now()->toDateTimeString(),
          'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
          'name' => 'TC_QuickCodesSmoke2',
          'tc_number' => null,
          'start_date_time' => Carbon\Carbon::now()->toDateTimeString(),
          'end_date_time' => Carbon\Carbon::now()->toDateTimeString(),
          'Status' => 1,
          'parameters' => 'username=cweinberg@hbsstg.org, pwd=423de23dss32, authenticate=yes',
          'messages' => null,
          'failure_msg' => null
        ]);

        DB::table('cases')->insert([
          'created_at' => Carbon\Carbon::now()->toDateTimeString(),
          'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
          'name' => 'TC_GradesSmoke4',
          'tc_number' => 1,
          'start_date_time' => Carbon\Carbon::now()->toDateTimeString(),
          'end_date_time' => Carbon\Carbon::now()->toDateTimeString(),
          'Status' => 2,
          'parameters' => 'username=eberntson@hbsstg.org, pwd=423de23dss32, authenticate=yes',
          'messages' => 'no such element found exception.',
          'failure_msg' => 'full stack trace'
        ]);

        DB::table('cases')->insert([
          'created_at' => Carbon\Carbon::now()->toDateTimeString(),
          'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
          'name' => 'TC_GradesSmoke4',
          'tc_number' => 1,
          'start_date_time' => Carbon\Carbon::now()->toDateTimeString(),
          'end_date_time' => Carbon\Carbon::now()->toDateTimeString(),
          'Status' => 2,
          'parameters' => 'username=eberntson@hbsstg.org, pwd=423de23dss32, authenticate=yes',
          'messages' => 'no such element found exception.',
          'failure_msg' => 'full stack trace'
        ]);

        DB::table('cases')->insert([
          'created_at' => Carbon\Carbon::now()->toDateTimeString(),
          'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
          'name' => '1TC_GradesSmoke5',
          'tc_number' => 1,
          'start_date_time' => Carbon\Carbon::now()->toDateTimeString(),
          'end_date_time' => Carbon\Carbon::now()->toDateTimeString(),
          'Status' => 2,
          'parameters' => 'username=eberntson@hbsstg.org, pwd=423de23dss32, authenticate=yes',
          'messages' => 'no such element found exception.',
          'failure_msg' => 'full stack trace'
        ]);

        DB::table('cases')->insert([
          'created_at' => Carbon\Carbon::now()->toDateTimeString(),
          'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
          'name' => 'TC_GradesSmoke5',
          'tc_number' => 1,
          'start_date_time' => Carbon\Carbon::now()->toDateTimeString(),
          'end_date_time' => Carbon\Carbon::now()->toDateTimeString(),
          'Status' => 2,
          'parameters' => 'username=eberntson@hbsstg.org, pwd=423de23dss32, authenticate=yes',
          'messages' => 'no such element found exception.',
          'failure_msg' => 'full stack trace'
        ]);

        DB::table('cases')->insert([
          'created_at' => Carbon\Carbon::now()->toDateTimeString(),
          'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
          'name' => 'TC_QuickCodesSmoke3',
          'tc_number' => null,
          'start_date_time' => Carbon\Carbon::now()->toDateTimeString(),
          'end_date_time' => Carbon\Carbon::now()->toDateTimeString(),
          'Status' => 1,
          'parameters' => 'username=cweinberg@hbsstg.org, pwd=423de23dss32, authenticate=yes',
          'messages' => null,
          'failure_msg' => null
        ]);

        DB::table('cases')->insert([
          'created_at' => Carbon\Carbon::now()->toDateTimeString(),
          'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
          'name' => 'TC_QuickCodesSmoke4',
          'tc_number' => null,
          'start_date_time' => Carbon\Carbon::now()->toDateTimeString(),
          'end_date_time' => Carbon\Carbon::now()->toDateTimeString(),
          'Status' => 1,
          'parameters' => 'username=cweinberg@hbsstg.org, pwd=423de23dss32, authenticate=yes',
          'messages' => null,
          'failure_msg' => null
        ]);

        DB::table('cases')->insert([
          'created_at' => Carbon\Carbon::now()->toDateTimeString(),
          'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
          'name' => 'TC_QuickCodesSmoke1',
          'tc_number' => null,
          'start_date_time' => Carbon\Carbon::now()->toDateTimeString(),
          'end_date_time' => Carbon\Carbon::now()->toDateTimeString(),
          'Status' => 1,
          'parameters' => 'username=cweinberg@hbsstg.org, pwd=423de23dss32, authenticate=yes',
          'messages' => null,
          'failure_msg' => null
        ]);

        DB::table('cases')->insert([
          'created_at' => Carbon\Carbon::now()->toDateTimeString(),
          'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
          'name' => 'TC_QuickCodesSmoke2',
          'tc_number' => null,
          'start_date_time' => Carbon\Carbon::now()->toDateTimeString(),
          'end_date_time' => Carbon\Carbon::now()->toDateTimeString(),
          'Status' => 1,
          'parameters' => 'username=cweinberg@hbsstg.org, pwd=423de23dss32, authenticate=yes',
          'messages' => null,
          'failure_msg' => null
        ]);

        DB::table('cases')->insert([
          'created_at' => Carbon\Carbon::now()->toDateTimeString(),
          'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
          'name' => 'TC_GradesSmoke5',
          'tc_number' => 1,
          'start_date_time' => Carbon\Carbon::now()->toDateTimeString(),
          'end_date_time' => Carbon\Carbon::now()->toDateTimeString(),
          'Status' => 2,
          'parameters' => 'username=eberntson@hbsstg.org, pwd=423de23dss32, authenticate=yes',
          'messages' => 'no such element found exception.',
          'failure_msg' => 'full stack trace'
        ]);

        DB::table('cases')->insert([
          'created_at' => Carbon\Carbon::now()->toDateTimeString(),
          'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
          'name' => 'TC_QuickCodesSmoke3',
          'tc_number' => null,
          'start_date_time' => Carbon\Carbon::now()->toDateTimeString(),
          'end_date_time' => Carbon\Carbon::now()->toDateTimeString(),
          'Status' => 1,
          'parameters' => 'username=cweinberg@hbsstg.org, pwd=423de23dss32, authenticate=yes',
          'messages' => null,
          'failure_msg' => null
        ]);

        DB::table('cases')->insert([
          'created_at' => Carbon\Carbon::now()->toDateTimeString(),
          'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
          'name' => 'TC_QuickCodesSmoke4',
          'tc_number' => null,
          'start_date_time' => Carbon\Carbon::now()->toDateTimeString(),
          'end_date_time' => Carbon\Carbon::now()->toDateTimeString(),
          'Status' => 1,
          'parameters' => 'username=cweinberg@hbsstg.org, pwd=423de23dss32, authenticate=yes',
          'messages' => null,
          'failure_msg' => null
        ]);

        DB::table('cases')->insert([
          'created_at' => Carbon\Carbon::now()->toDateTimeString(),
          'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
          'name' => 'TC_AtlasSmoke1',
          'tc_number' => null,
          'start_date_time' => Carbon\Carbon::now()->toDateTimeString(),
          'end_date_time' => Carbon\Carbon::now()->toDateTimeString(),
          'Status' => 1,
          'parameters' => 'username=cweinberg@hbsstg.org, pwd=423de23dss32, authenticate=yes',
          'messages' => null,
          'failure_msg' => null
        ]);

        DB::table('cases')->insert([
          'created_at' => Carbon\Carbon::now()->toDateTimeString(),
          'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
          'name' => 'TC_GradesSmoke6',
          'tc_number' => 1,
          'start_date_time' => Carbon\Carbon::now()->toDateTimeString(),
          'end_date_time' => Carbon\Carbon::now()->toDateTimeString(),
          'Status' => 2,
          'parameters' => 'username=eberntson@hbsstg.org, pwd=423de23dss32, authenticate=yes',
          'messages' => 'no such element found exception.',
          'failure_msg' => 'full stack trace'
        ]);

        DB::table('cases')->insert([
          'created_at' => Carbon\Carbon::now()->toDateTimeString(),
          'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
          'name' => 'TC_GradesSmoke6',
          'tc_number' => null,
          'start_date_time' => Carbon\Carbon::now()->toDateTimeString(),
          'end_date_time' => Carbon\Carbon::now()->toDateTimeString(),
          'Status' => 3,
          'parameters' => 'username=ghalstead@hbsstg.org, pwd=423de23dss32, authenticate=yes',
          'messages' => null,
          'failure_msg' => null
        ]);

        DB::table('cases')->insert([
          'created_at' => Carbon\Carbon::now()->toDateTimeString(),
          'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
          'name' => 'TC_GradesSmoke6',
          'tc_number' => null,
          'start_date_time' => Carbon\Carbon::now()->toDateTimeString(),
          'end_date_time' => Carbon\Carbon::now()->toDateTimeString(),
          'Status' => 3,
          'parameters' => 'username=ghalstead@hbsstg.org, pwd=423de23dss32, authenticate=yes',
          'messages' => null,
          'failure_msg' => null
        ]);

        DB::table('cases')->insert([
          'created_at' => Carbon\Carbon::now()->toDateTimeString(),
          'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
          'name' => 'TC_DoctoralSmoke1',
          'tc_number' => null,
          'start_date_time' => Carbon\Carbon::now()->toDateTimeString(),
          'end_date_time' => Carbon\Carbon::now()->toDateTimeString(),
          'Status' => 1,
          'parameters' => 'username=cweinberg@hbsstg.org, pwd=423de23dss32, authenticate=yes',
          'messages' => null,
          'failure_msg' => null
        ]);

        DB::table('cases')->insert([
          'created_at' => Carbon\Carbon::now()->toDateTimeString(),
          'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
          'name' => 'TC_DoctoralSmoke2',
          'tc_number' => null,
          'start_date_time' => Carbon\Carbon::now()->toDateTimeString(),
          'end_date_time' => Carbon\Carbon::now()->toDateTimeString(),
          'Status' => 1,
          'parameters' => 'username=cweinberg@hbsstg.org, pwd=423de23dss32, authenticate=yes',
          'messages' => null,
          'failure_msg' => null
        ]);

        DB::table('cases')->insert([
          'created_at' => Carbon\Carbon::now()->toDateTimeString(),
          'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
          'name' => 'TC_DoctoralSmoke3',
          'tc_number' => 1,
          'start_date_time' => Carbon\Carbon::now()->toDateTimeString(),
          'end_date_time' => Carbon\Carbon::now()->toDateTimeString(),
          'Status' => 2,
          'parameters' => 'username=eberntson@hbsstg.org, pwd=423de23dss32, authenticate=yes',
          'messages' => 'no such element found exception.',
          'failure_msg' => 'full stack trace'
        ]);
    }
}
