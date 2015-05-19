<?php
include('login.php'); // Includes Login Script
if(isset($_SESSION['usuarioLogiado'])){
	header("location: principal.php");
}
?>

<html lang="en">
<head>
	<meta charset = "UTF-8">
	<title>Ingresar al sistema</title>
	<link href='http://fonts.googleapis.com/css?family=Courgette' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="css/formato.css">

</head>
<body>
	<form action="" method="POST">
		<!--max-length="255"-->
		<h1>Profedex</h1>
		<input type = "text" placeholder = "Ingrese su usuario" name="nombreU" required/>
		<input type = "password" placeholder = "Ingrese su contraseña" name = "pass" required/>
		<!--<button type="button" onclick="location.href='crearCuenta.html'">Registrarse</button>-->
		<button type="submit" name="submit">Iniciar Sesion</button>
		<!--<span><?php //echo $error; ?></span>-->
	</form>
	<h4><a href="crearCuenta.php">Crear una cuenta</a></h4>
</body>

</html>