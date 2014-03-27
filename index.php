<!DOCTYPE html>
<html ng-app='App'>
	<title>
		Sistema de inventario de Alfacero Hual CA - vctr
	</title>
	<head>

		<meta charset="UTF-8">

		<!-- Styles zone -->

			<!-- Bootstrap -->

				<link type='text/css' rel='stylesheet' href='css/bootstrap.min.css'>

			<!-- Custom styles -->

				<link type='text/css' rel='stylesheet' href='css/style.css'>

		<!-- Javascripts Zone -->

			<!-- dependencies -->

				<!-- jQuery-->

					<? include 'includes/jquery.php';?>

				<!-- Angularjs -->

					<? include 'includes/angular.php';?>

				<!-- Bootstrap -->

					<? include 'includes/bootstrap.php';?>

			<!-- customs Javascripts-->

				<? include 'includes/customjs.php';?>
	</head>
	<body>
		<div id='cont' ng-controller='contenido'>
			<? //include 'contenido.php';?>
			<div id='cnt'>

			</div>
			<a ng-click='show("material")' href=''>Materiales</a>
			<a ng-click='shw("material")' href=''>Materiales ver / editar</a>
			<div class='preview'>
				<? include 'includes/preview.php'?>
			</div>
			<div id='query'>
				<? include 'includes/jsQuery.php'?>
			</div>
			<div id='ajaxreq'>
				
			</div>
		</div>
	</body>
</html>
