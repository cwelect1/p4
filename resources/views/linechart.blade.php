@extends('layouts.master')

@section('title')
    <title>Automation Reporting Tool</title>
@stop

@section('navMenu')
    <?php
      use App\helpers\Helper;
      Helper::buildNavMenu();
    ?>
@stop

@section('ChartUno')
    
<? echo \Lava::render('PieChart', 'myPieChart', 'chart-div') ?>

@stop

@section('ChartDos')
    
<? echo \Lava::render('PieChart', 'myThreeDPieChart', 'chart2-div') ?>

@stop

@section('ChartTres')
    
<? echo \Lava::render('DonutChart', 'myDonut', 'chart3-div') ?>

@stop