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

    //$suites = $this->getSuites();

    //var_dump($runs);

    return view('runs.index')
      ->with(['runs' =>$runs,
              'nav' => $nav->buildNavMenu(),
            ]);
  }

  /**
  * Get runs within x # of days. /
  */
  public function getRuns() {
    // Get all the test runs
    // Sort in descending order by id
    $runs = new \App\Run();

    return $runs->getRunsWithinXDays(90);
  }

  /**
  * Get suites for a set of runs. /
  */
  public function getSuites($runs) {
    // Get all the test suites
    
    $results = new \Illuminate\Database\Eloquent\Collection;

    foreach($runs as $run){

      $results->add();

    }

    return $runs->getRunsWithinXDays(90);
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

  }
}