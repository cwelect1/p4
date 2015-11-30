<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="ART is a tool for orgnazing, displaying, and editing automation test results.">
    <meta name="author" content="Corbett Weinberg">
    <link rel="icon" href="../../favicon.ico">


    <!-- Bootstrap core CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">

    <!-- JASNY Bootstrap core CSS -->
    <link href="css/jasny-bootstrap.min.css\" rel="stylesheet">
    <link href="css/jasny-offcanvas.css\" rel="stylesheet">
    <link href="css/custom.css\" rel="stylesheet">


    <!-- Custom styles for this template -->
    <!--@yield("customCSS", "<link href=\"/css/main.css\" rel=\"stylesheet\">")-->
    @yield('title')
  </head>

  <body style>
    <div class="navmenu navmenu-default navmenu-fixed-left">
      <ul class="navmenu-brand">Home</ul>

      <ul class="nav navmenu-nav">
        <li class="navmenu-section-header">Test Type</li>
        <li class="navmenu-subitem"><a href="#">Smoke Tests</a></li>
        <li class="navmenu-subitem"><a href="#">Integration Tests</a></li>
        <li class="navmenu-subitem"><a href="#">Regression Tests</a></li>
      </ul>
      <ul class="nav navmenu-nav">
        <li class="navmenu-section-header">Partner</li>
        <li class="navmenu-subitem"><a href="#">MBA</a></li>
        <li class="navmenu-subitem"><a href="#">Doctoral</a></li>
        <li class="navmenu-subitem"><a href="#">Executive Education</a></li>
        <li class="navmenu-subitem"><a href="#">External Relations</a></li>
        <li class="navmenu-subitem"><a href="#">Finance</a></li>
        <li class="navmenu-subitem"><a href="#">Operations</a></li>
      </ul>
      <ul class="nav navmenu-nav">
        <li class="navmenu-section-header">Infrastructure</li>
        <li class="navmenu-subitem"><a href="#">Access</a></li>
        <li class="navmenu-subitem"><a href="#">Security</a></li>
      </ul>
    </div>
    <!--<nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Automation Reporting Tool</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#">Dashboard</a></li>
            <li><a href="#">Settings</a></li>
            <li><a href="#">Profile</a></li>
            <li><a href="#">Help</a></li>
          </ul>
          <form class="navbar-form navbar-right">
            <input type="text" class="form-control" placeholder="Search...">
          </form>
        </div>
      </div>
    </nav>-->
    <div class="canvas" style>
      <div class="navbar navbar-default navbar-fixed-top" style>
        <button type="button" class="navbar-toggle" data-toggle="offcanvas" data-recalc="false" data-target=".navmenu" data-canvas=".canvas">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
      </div>

      <div class="container">
        @yield('content')
      </div>
      <!--<div class="container">
        <div class="page-header">
          <h1>Off Canvas Reveal Menu Template</h1>
        </div>
        <p class="lead">This example demonstrates the use of the offcanvas plugin with a reveal effect.</p>
        <p>On the contrary of the push effect, the menu doesn't move with the canvas.</p>
        <p>You get the reveal effect by wrapping the content in a div and setting the <code>canvas</code> option to target that div.</p>
        <p>Note that in this example, the navmenu doesn't have the <code>offcanvas</code> class, but is placed under the canvas by setting the <code>z-index</code>.</p>
        <p>Also take a look at the examples for a navmenu with <a href="../navmenu">slide in effect</a> and <a href="../navmenu-push">push effect</a>.</p>
      </div>--><!-- /.container -->
    </div>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js" type="text/javascript"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="js/jasny-bootstrap.min.js\" type="text/javascript"></script>
</body>
</html>