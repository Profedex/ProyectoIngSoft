<?php
include('altaUsuario.php'); // Includes Login Script
if(isset($_SESSION['usuarioLogiado'])){
	header("location: principal.php");
}
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset = "UTF-8">
		<title>Crear Cuenta</title>
		<link href='http://fonts.googleapis.com/css?family=Courgette' rel='stylesheet' type='text/css'>
		<script type="text/javascript" src="javascript/validarContra.js"></script>
		<link rel="stylesheet" type="text/css" href="css/estilos.css">

	</head>
	<body>
		
		<form action= "" method = "POST" name="form" onsubmit="validar(this);">
			<h1>Profedex</h1>
			<h2>Crear tu cuenta</h2>
			<input type="text" placeholder = "Nombre de Usuario" name ="nombreU" id="nombreU" required>

			<input type="password" placeholder = "Contraseña" name = "pass" id="pass" requiered> 
			
			<input type="password" placeholder = "Confirmar contraseña" name = "passC" id="passC" requiered>
			<div>
				<input type="submit"  name = "submit" value = "Crear">
			</div>
		</form>
		
	</body>

</html>