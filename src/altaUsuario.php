<?php
	//conexion a la base de datos
	if(isset($_POST['nombreU']) && !empty($_POST['nombreU']) &&
		isset($_POST['pass']) && !empty($_POST['pass']) &&
		isset($_POST['passC']) && !empty($_POST['passC'])){

		$conexion = mysql_connect('localhost','root','') or die ("No se pudo conectar al servidor");
		mysql_select_db("profedex",$conexion) or die("No se pudo conectar a la base de datos");

		$nombre = $_POST['nombreU'];
		$contra = $_POST['pass'];
		$formulario = $_POST['form'];
		

		$UR = mysql_num_rows(mysql_query("SELECT nombreU FROM Usuarios where nombreU = '$nombre'"));
		
		if($UR != 0){
			header("Location: crearCuenta.html");
		}else{
			mysql_query("INSERT INTO usuarios (nombreU,passwUsuario) 
				VALUES ('$nombre','$contra')");
			//header("Location: principal.html");
			
		}
	}else{
		
		header("Location: crearCuenta.html");
	}

?>