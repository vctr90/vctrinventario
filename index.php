<!DOCTYPE html>
<html ng-app='App'>
	<title>
		Sistema de inventario de Alfacero Hual CA - vctr
	</title>
	<head>
		<!-- Styles zone -->

			<!-- Bootstrap -->

				<link type='text/css' rel='stylesheet' href='css/bootstrap.min.css'>

			<!-- Custom styles -->

				<link type='text/css' rel='stylesheet' href='css/style.css'>

		<!-- Javascripts Zone -->

			<!-- dependencies -->

				<!-- Angularjs -->

					<? include 'includes/angular.php';?>

				<!-- Bootstrap -->

					<? include 'includes/bootstrap.php';?>

			<!-- customs Javascripts-->

				<? include 'includes/customjs.php';?>
	</head>
	<body>
		<div id='conten' ng-controller='contenido'>
			<? include 'contenido.php';?>
		</div>
	</body>
</html>
