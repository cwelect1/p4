<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Khill\Lavacharts\Lavacharts; 
use App\Helpers\Helper;

class DashboardController extends Controller
{
  public function __construct(Request $request) {
      # Put anything here that should happen before any of the other actions
  }

  public function loadPage(Request $request){

    $this->getCharts();

    $nav = new Helper;

    $runs = $this->getRuns();

    global $results;
    // Probably a much better way to get to the Test cases other than this technique.
    // I couldn't figure out how using Laravel/Eloquent. So, collections abound.
    // Test Run -> Test Suite(s) -> Test Case(s)
    $runs->each(function($run){

      global $results, $totalCases, $passed, $failed ,$skipped;
      $rows = array(); $results = array(); $totalCases = 0; $passed = 0; $failed = 0; $skipped = 0;

      $run->suites->each(function($suite){

        $testcases = \App\Suite::find($suite->id)->testcases;
        $testcases->each(function($testcase){

          global $totalCases, $passed, $failed ,$skipped;

          $totalCases++;

          if($testcase->status == 1){
            $passed++;
          }
          elseif($testcase->status == 2){
            $failed++;
          }
          elseif ($testcase->status == 3) {
            $skipped++;
          }
          
        }); // end cases
      }); // end suites
      //global $totalCases, $pass, $fail ,$skip;
      //echo 'totalCases = ' . $totalCases . ' passed = ' . $passed . ' failed = ' . $failed . ' skipped = ' . $skipped . '<br>';
      $row = array($run->id, $run->description, $totalCases, $passed, $failed, $skipped);
      array_push($results, $row);
      //array_push($rows, $results);
    }); //end runs
    var_dump($results);

    return view('runs.index')
              ->with([//'runs' =>$runs,
                      'runs' => $results,
                      'nav' => $nav->buildNavMenu(),
                      //'totalRuns' => $totalRuns,
                      //'gradesRuns' => $gradesRuns,
                    ]);
  }

  /**
  * Responds to requests to GET /
  */
  public function getRuns() {
    // Get all the test runs
    // Sort in descending order by id
    $runs = new \App\Run();

    return $runs->getRunsWithinXDays(90);
  }

  /**
  * Responds to requests to GET /
  */
  public function getTestCases($TestRunIds) {

    //$results = // return collection of testcases;

    foreach($TestRunIds as $testrun){

      // get suites for each run

      // get test cases for each suite

    }
    $runs = new \App\Run();

    return $runs->getRunsWithinXDays(90);
  }

  public function loadData(){

    /*
    $collTestRunsSuitesCases =  array();

    foreach($runs as $run){

      \Log::info('***** Run *****: '.$run);
      $data = array($run->id, $run->description);

      $suites = \App\Suite::find($run);
      \Log::info('****** Suites ******: '.$suites);

      foreach ($suites as $suite) {
        
        $testcases = \App\Testcase::find($suite);
        \Log::info('********* Test Cases **********: '.$testcases);

        foreach ($testcases as $testcase) {
          
          \Log::info('********* Test Case **********: '.$testcase);
          //array_push($data, $testcase->name, $testcase->status);
        }
      }
      array_push($collTestRunsSuitesCases, $data);
    }
    */



  }

  public function getCharts(){

    $chart = new Helper;

    $smoke = \Lava::DataTable();
    $integration = \Lava::DataTable();
    $regression = \Lava::DataTable();

    $smoke->addStringColumn('TestResults')
            ->addNumberColumn('Percent')
            ->addRow(array('Passed', 99.55))
            ->addRow(array('Failed', 29.45))
            ->addRow(array('Skipped', 20));

    $integration->addStringColumn('TestResults')
            ->addNumberColumn('Percent')
            ->addRow(array('Passed', 90))
            ->addRow(array('Failed', 5))
            ->addRow(array('Skipped', 5));

    $regression->addStringColumn('TestTesults')
            ->addNumberColumn('Percent')
            ->addRow(array('Passed', 82))
            ->addRow(array('Failed', 18))
            ->addRow(array('Skipped', 20));


    $chart->getChart('SmokeTestChart', 'PieChart', 250, 250, array('078B3E', 'CD1E35', 'FCDC27'), $smoke);
    $chart->getChart('IntegrationTestChart', 'PieChart', 250, 250, array('078B3E', 'CD1E35', 'FCDC27'), $integration);
    $chart->getChart('RegressionTestChart', 'PieChart', 250, 250, array('078B3E', 'CD1E35', 'FCDC27'), $regression);

    /*\Lava::PieChart('SmokeTestChart')
         ->setOptions(array(
           'datatable' => $smoke,
           'legend' => \Lava::Legend(array(
              'position' => 'none'
              )),
            'chartArea' => \Lava::ChartArea([
                'width' => 250,
                'height' => 250
            ]),
            'colors' => (array('078B3E', 'CD1E35', 'FCDC27')),
            'is3D' => true
          ));
  
    \Lava::PieChart('IntegrationTestChart')
         ->setOptions(array(
           'datatable' => $integration,
           'legend' => \Lava::Legend(array(
              'position' => 'none'
              )),
            'chartArea' => \Lava::ChartArea([
                'width' => 250,
                'height' => 250
            ]),
            'colors' => (array('078B3E', 'CD1E35', 'FCDC27')),
            'is3D' => true
          ));

    \Lava::PieChart('RegressionTestChart')
         ->setOptions(array(
           'datatable' => $regression,
           'legend' => \Lava::Legend(array(
              'position' => 'none'
              )),
            'chartArea' => \Lava::ChartArea([
                'width' => 250,
                'height' => 250
            ]),
            'colors' => (array('078B3E', 'CD1E35', 'FCDC27')),
            'is3D' => true
          ));
    */
  }

  // Colors we may want to use:
  // 'colors' => (array('078B3E', 'CD1E35', 'FCDC27')) // Traditional (Red, Yellow, Green)
  // 'colors' => (array('368DB9', 'A41034', 'FCDC27')) // Autumnish (Red, Yellow, Blue)
}