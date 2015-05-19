<?php
include("conexion.php");
session_start();
if(!isset($_SESSION['usuarioLogiado'])){//si no se ha iniciado sesion te manara a la pagina para registrarse
	header("location: registrarse.php");
}
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
					<a href="#"><span class="icon-pacman"></span>Hola, <?php echo $_SESSION['usuarioLogiado'];?><span class="cara icon-unlocked"></span></a>
					<ul class="hijos">
						<li><a href="#">Inicio<span class="icon-home"></span></a></li>
						<li><a href="#">Submenu #2<span class="icon-coin-dollar"></span></a></li>
						<li><a href="cerrarSesion.php">Salir<span class="icon-exit"></span></a></li>
					</ul>
				</li>
				<?php 
					if ($_SESSION['tipo'] == "admin") {
					echo "<li><a href='usuariosRegistrados.php'><span class='icon-user-check'></span>Usuarios Registrados</a></li>";
					echo "
						<li class='submenu'>
						<a href='#''><span class='icon-book'></span>Materias</a>
							<ul class='hijos'>
								<li><a href='verMaterias.php'>Ver Materias<span class='icon-eye'></span></a></li>
								<li><a href='agregarMateria.php'>Agregar Materias<span class='icon-plus'></span></a></li>
								<li><a href='editarMateria.php'>Editar Materias<span class='icon-settings'></span></a></li>
								<li><a href='borrarMateria.php'>Borrar Materias<span class='icon-bin2'></span></a></li>
							</ul>
						</li>

					";
					echo "
						<li class='submenu'>
						<a href='#''><span class='icon-study'></span>Maestros</a>
							<ul class='hijos'>
								<li><a href='verMaestros.php'>Ver Maestros<span class='icon-eye'></span></a></li>
								<li><a href='agregarMaestro.php'>Agregar Maestros<span class='icon-plus'></span></a></li>
								<li><a href='editarMaestro.php'>Editar Maestros<span class='icon-settings'></span></a></li>
								<li><a href='eliminarMaestro.php'>Borrar Maestros<span class='icon-bin2'></span></a></li>
							</ul>
						</li>

					";
					echo "
						<li class='submenu'>
						<a href='#''><span class='icon-bubbles2'></span>Comentarios Reportados</a>
							<ul class='hijos'>
								<li><a href='#'>Eliminar Comentarios<span class='icon-bin2'></span></a></li>
							</ul>
						</li>

					";
					}else{
						echo "<li><a href='#'><span class='icon-users'></span>Acerca de Nososotros</a></li>";
						echo "<li><a href='#'><span class='icon-book'></span>Materias</a></li>";
					}
				?>
			</ul>
		</nav>
	</header>

	
</body>
</html>