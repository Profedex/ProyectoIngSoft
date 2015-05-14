<?php
include("conexion.php");
session_start();
?>
<html>
<head>
	<title>Inicio</title>
	<meta charset = "UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/estiloPrincipal.css">
	<link rel="stylesheet" type="text/css" href="fonts.css">
	<script src="http://code.jquery.com/jquery-latest.js"></script>
	<script src="javascript/main.js"></script>
</head>
<body>
	<header>
		<div class="menuI">
			<a href="#" class="bt-menu"> <span class="icon-menu"></span>Inicio</a>
		</div>
		<nav>
			<ul>
				<li class="submenu">
					<a href="#"><span class="icon-pacman"></span>Hola, <?php echo $_SESSION['usuarioLogiado'];?><span class="cara icon-like"></span></a>
					<ul class="hijos">
						<li><a href="#">Submenu #1<span class="icon-coin-dollar"></span></a></li>
						<li><a href="#">Submenu #2<span class="icon-coin-dollar"></span></a></li>
						<li><a href="cerrarSesion.php">Salir<span class="icon-coin-dollar"></span></a></li>
					</ul>
				</li>
				<li><a href="#"><span class="icon-users"></span>Acerca de Nososotros</a></li>
				<li><a href="#"><span class="icon-book"></span>Materias</a></li>
				
			</ul>
		</nav>
	</header>

	
</body>
</html>