<?php
	session_start();//iniciamos sesion
	$error="";//variable auxiliar ara un error
	if (isset($_POST['submit'])) {
		if (empty($_POST['nombreU']) || empty($_POST['pass'])) {
			$error = "Usuario o Contraseña incorrecta";
		
		}else{
			$nombre = $_REQUEST['nombreU'];
			$pass = $_REQUEST['pass'];
			$conexion = mysql_connect("localhost","root","") or die("PROBLEMAS AL CONECTAR EL SERVIDOR");
			mysql_select_db("profedex", $conexion) or die("ERROR AL CONECTAR CON LA BASE DE DATOS");
			$usuario = mysql_num_rows(mysql_query("SELECT nombreU FROM Usuarios where nombreU = '$nombre' and passwUsuario = '$pass'"));
			
			if($usuario!=0){
			//cerramos php para meter html
				$_SESSION['usuarioLogiado']=$nombre;
				$resultado = mysql_query("SELECT tipo FROM Usuarios WHERE nombreU = '$nombre'");
				if (!$resultado) {
					echo 'No se pudo ejecutar la consulta: ' . mysql_error();
					exit;
				}
				$fila = mysql_fetch_row($resultado);
				$_SESSION['tipo'] = $fila[0];
				header("location: principal.php"); // Redirecting To Other Page
			}else{
				$error = "Usuario o Contraseña incorrecta.";
					//header("Location: registrarse.html");	
			}
			mysql_close($conexion);//cerramos la cnexion
		}
	}
?>
