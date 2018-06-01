<!DOCTYPE html>
<html>
<head>
	<title>Laravel/Angular todo app</title>
	<script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
	<script type="text/javascript" src="https://code.angularjs.org/1.5.7/angular.min.js"></script>
	<script type="text/javascript" src="https://code.angularjs.org/1.5.7/angular-route.min.js"></script>
	<script type="text/javascript" src="https://code.angularjs.org/1.5.8/angular-animate.min.js"></script>
	<script type="text/javascript" src="../js/libraries/ui-bootstrap-tpls-2.0.0.min.js"></script>

	<script src="https://unpkg.com/angular-toastr/dist/angular-toastr.tpls.js"></script>
	<link rel="stylesheet" href="https://unpkg.com/angular-toastr/dist/angular-toastr.css" />

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

	<link rel="stylesheet" type="text/css" href="../content/css/style.css">
	<link rel="stylesheet" type="text/css" href="../content/css/helpers.css">

	<script type="text/javascript" src="../js/index.js"></script>
	<script type="text/javascript" src="../js/services/todoService.js"></script>
	<script type="text/javascript" src="../js/mainRoutes.js"></script>
	<script type="text/javascript" src="../js/mainApp.js"></script>

</head>
<body ng-app="mainApp">
<div class="col">
    <div id="wrapper">
	    <!-- <div class="overlay"></div> -->
	    <!-- Sidebar -->
	    <nav class="navbar navbar-inverse navbar-fixed-top" id="sidebar-wrapper" role="navigation">
	        <ul class="nav sidebar-nav">
	            <li class="sidebar-brand">
	                <a href="#/">
	                   To-do app
	                </a>
	            </li>
	            <li>
	                <a href="#/">Your todo lists</a>
	            </li>
	            <li>
	                <a href="#about">About</a>
	            </li>
	        </ul>
	    </nav>
	    <!-- /#sidebar-wrapper -->

	    <!-- Page Content -->
	    <div id="page-content-wrapper">
	        <button type="button" class="hamburger is-closed" data-toggle="offcanvas">
	            <span class="hamb-top"></span>
				<span class="hamb-middle"></span>
				<span class="hamb-bottom"></span>
	        </button>
	        <div class="container">
	            <ng-view></ng-view>
	        </div>
	    </div>
	    <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->
</body>
</html>