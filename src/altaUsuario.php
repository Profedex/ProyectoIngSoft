<?php
	session_start();//iniciamos sesion
	$error="";//variable auxiliar ara un error

	/*
	ESTO EVITA SI PONEMOS altaUsuario.php directo pero al momento de registrar.php querer crear una cuenta no te va dejar
	pues directamente va y te redirecciona a registrarse
	if(!isset($_SESSION['usuarioLogiado'])){
		header("location: registrarse.php");
	}*/
	if (isset($_POST['submit'])) {
		if (empty($_POST['nombreU']) || empty($_POST['pass'])) {
			$error = "Usuario o Contraseña incorrecta";
		}else{
			if(isset($_POST['nombreU']) && !empty($_POST['nombreU']) &&
				isset($_POST['pass']) && !empty($_POST['pass']) &&
				isset($_POST['passC']) && !empty($_POST['passC'])){

				$conexion = mysql_connect('localhost','root','') or die ("No se pudo conectar al servidor.");
				mysql_select_db("profedex",$conexion) or die("No se pudo conectar a la base de datos.");

				$nombre = $_POST['nombreU'];
				$contra = $_POST['pass'];
				
				$UR = mysql_num_rows(mysql_query("SELECT nombreU FROM Usuarios where nombreU = '$nombre'"));
				
				if($UR != 0){//ya existe ese usuario
					header("Location: crearCuenta.php");
				}else{
					mysql_query("INSERT INTO usuarios (nombreU,passwUsuario) 
						VALUES ('$nombre','$contra')");
					$_SESSION['usuarioLogiado']=$nombre;
					header("Location: principal.php");

					mysql_close($conexion);//cerramos la cnexion
				}
			}else{
				header("Location: crearCuenta.php");//algun campo incorrecto
			}
		}	
	}
?>