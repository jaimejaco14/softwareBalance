<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>@yield('titulo', 'Software Balance')</title>
	<!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <style type="text/css">
	    .sidenav-fixed{
	    	margin-top: 65px;
	    }
    </style>
	@yield('css')
</head>
<body>
	<header>
		<div class="navbar-fixed">
			<nav class="blue darken-3">
				<div class="nav-wrapper">
					<a href="" class="brand-logo center">Software Balance</a>
					<a href="#" data-target="navbarMovil" class="sidenav-trigger"><i class="material-icons">menu</i></a>
				</div>
			</nav>
		</div>
		<ul class="sidenav" id="navbarMovil">
		    <li><a href="#">Inicio</a></li>
		    <li><a href="#">Ingresos</a></li>
		    <li><a href="#">Egresos</a></li>
		    <li><a href="#">Propietarios</a></li>
		    <li><a href="#">Generar balance</a></li>
	  	</ul>
		<div class="container">
			<ul class="sidenav sidenav-fixed">
				<li><a href="#!">Inicio</a></li>
				<li><a href="#!">Ingresos</a></li>
				<li><a href="#!">Egresos</a></li>
				<li><a href="#!">Propietarios</a></li>
				<li><a href="#!">Generar balance</a></li>
			</ul>
		</div>
	</header>
	@yield('body')
	<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
	<!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script type="text/javascript" charset="utf-8">
    	$(document).ready(function(){

    		init();
    		
    		function init(){

    			$('.sidenav').sidenav();
    		}
    	})
    </script>
	@yield('js')
</body>
</html>