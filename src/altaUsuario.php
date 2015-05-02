<?php
	//conexion a la base de datos
	if(isset($_POST['nombreU']) && !empty($_POST['nombreU']) &&
		isset($_POST['correo']) && !empty($_POST['correo']) &&
		isset($_POST['pass']) && !empty($_POST['pass'])){

		$conexion = mysql_connect('localhost','root','') or die ("No se pudo conectar al servidor");
		mysql_select_db("profedex",$conexion) or die("No se pudo conectar a la base de datos");

		$nombre = $_POST['nombreU'];
		$email = $_POST['correo'];
		$contra = $_POST['pass'];
		mysql_query("INSERT INTO usuarios (nombreU,correo,passwUsuario) 
			VALUES ('$nombre','$email','$contra')");
		echo "Se han insertado los datos correctamente.";
		header("Location: index.html");
	}else{
		
		header("Location: crearCuenta.html");
	}

?>