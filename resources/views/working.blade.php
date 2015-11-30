@extends('layouts.master')

@section('title')
    <title>Automation Reporting Tool (ART)</title>
@stop

@section('navMenu')
    <li class="active"><a href="/">Home<span class="sr-only">(current)</span></a></li>
    <li><a href="/loremipsumgen">Lorem Ipsum</a></li>
    <li><a href="/usergen">User Generator</a></li>
@stop

@section('content')

  <div class="jumbotron other-color">
    <h1>Automation Reporting Tool (ART)</h1>
    <p class="lead">Need some utils to make your life as a developer easier? Well, you can thank faculty <a href="http://susanbuck.net/">Susan Buck</a> 
    for including this project in the class (<a href="http://dwa15.com/Home">DWA15</a>) she teaches at the Harvard Extension School.</p>
  </div>

  <div class="col-lg-4">
          <h2>Lorem Ipsum Generator</h2>
          <p>In publishing and graphic design, lorem ipsum is a placeholder text commonly used to demonstrate the graphic elements of a document or visual presentation.</p>
          <p><a class="btn btn-lg btn-primary" href="/loremipsumgen">Generate »</a></p>
  </div>

  <div class="col-lg-4">
  </div>

  <div class="col-lg-4">
          <h2>User Generator</h2>
          <p>Who doesn't need a user or two while developing an application. User Generator satisfies that requierment and then some.</p>
          <p><a class="btn btn-lg btn-primary" href="/usergen">Go Get Users »</a></p>
  </div>

@stop