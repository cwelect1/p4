@extends('layouts.masterDashboard')

@section('title')
    <title>Automation Reporting Tool</title>
@stop

@section('navMenu')
    <?php echo $result ?>
    <!--<?php
      //use App\helpers\Helper;
      //Helper::buildNavMenu();
    ?>-->
@stop

@section('SmokeTestChart')
    
<?php echo \Lava::render('PieChart', 'SmokeTestChart', 'chart-div') ?>

@stop

@section('IntegrationTestChart')
    
<?php echo \Lava::render('PieChart', 'IntegrationTestChart', 'chart2-div') ?>

@stop

@section('RegressionTestChart')
    
<?php echo \Lava::render('PieChart', 'RegressionTestChart', 'chart3-div') ?>

@stop

@section('tableRow')

  @if(sizeof($runs) == 0)
      <?php echo 'There are no test runs.' ?>
  @else
      @foreach($runs as $run)
          <tr>
              <td>{{ $run->id }}</td>
              <td>{{ $run->description }}</td>
              <td>140</td>
              <td>92</td> 
              <td>48</td> 
              <td>0</td> 
          </tr>
      @endforeach
  @endif

@stop
