<?php

use Illuminate\Database\Seeder;
//use Illuminate\Database\Eloquent\Model;

class RunSuiteTableSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
      
    $runs = \App\Run::all();
    //$suites = \App\Suite::all();
    $count = 0;

    foreach($runs as $run) {

      Log::info('Run at start of foreach: '.$run);
      $count++;
      Log::info('Count at start of foreach: '.$count);
      $name = $run->name;

      if($name == "Test Run #1"){
        //$run = \App\Run::where('name','=','Test Run #' . $count)->get();
        $suite = \App\Suite::where('name','=','MBA Grades Smoke Test Suite')->first();
        Log::info('Run before saving: '.$run);
        //$suite->runs()->save($run);
        $run->suites()->save($suite);
      }
    }
  }
/*
  public function run(){

    $run = \App\Run::find(1);
    $run->suites()->attach(\App\Suite::find(3));
    
    $run = \App\Run::find(2);
    $run->suites()->attach(\App\Suite::find(7));

    $run = \App\Run::find(3);
    $run->suites()->attach(\App\Suite::find(11));

    $run = \App\Run::find(4);
    $run->suites()->attach(\App\Suite::find(2));

    $run = \App\Run::find(5);
    $run->suites()->attach(\App\Suite::find(4));
  
    $run = \App\Run::find(6);
    $run->suites()->attach(\App\Suite::find(8));
  
    $run = \App\Run::find(7);
    $run->suites()->attach(\App\Suite::find(12));
  
    $run = \App\Run::find(8);
    $run->suites()->attach(\App\Suite::find(5));
  
    $run = \App\Run::find(9);
    $run->suites()->attach(\App\Suite::find(9));
  
    $run = \App\Run::find(10);
    $run->suites()->attach(\App\Suite::find(13));
  
    $run = \App\Run::find(11);
    $run->suites()->attach(\App\Suite::find(14));
  }*/
}
