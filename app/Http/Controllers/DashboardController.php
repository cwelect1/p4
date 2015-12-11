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

    $this->getChart($request);
    $result = new Helper;
    //$result->buildNavMenuNew();
    $runs = $this->getIndex($request);
    return view('runs.index')->with(['runs' =>$runs,
      'result' => $result->buildNavMenuNew(),
      ]);
  }

  /**
  * Responds to requests to GET /
  */
  public function getIndex(Request $request) {
      // Get all the test runs
      // Sort in descending order by id
      return $runs = \App\Run::where('start_date_time','>=',\Carbon\Carbon::now()->subDays(180))->orderBy('id','DESC')->get();
  }

  public function getChart(){

    $smoke = \Lava::DataTable();
    $integration = \Lava::DataTable();
    $regression = \Lava::DataTable();

    $smoke->addStringColumn('Status')
            ->addNumberColumn('Percent')
            ->addRow(array('Passed', 99.55))
            ->addRow(array('Failed', 29.45))
            ->addRow(array('Skipped', 20));

    $integration->addStringColumn('Status')
            ->addNumberColumn('Percent')
            ->addRow(array('Passed', 90))
            ->addRow(array('Failed', 5))
            ->addRow(array('Skipped', 5));

    $regression->addStringColumn('Status')
            ->addNumberColumn('Percent')
            ->addRow(array('Passed', 82))
            ->addRow(array('Failed', 18))
            ->addRow(array('Skipped', 20));

    \Lava::PieChart('SmokeTestChart')
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
  }

  // Colors we may want to use:
  // 'colors' => (array('078B3E', 'CD1E35', 'FCDC27')) // Traditional (Red, Yellow, Green)
  // 'colors' => (array('368DB9', 'A41034', 'FCDC27')) // Autumnish (Red, Yellow, Blue)
}