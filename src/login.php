<html>
<title>inicio</title>
<?php
	$nombre = $_REQUEST['nombreU'];
	$pass = $_REQUEST['pass'];
	$conexion = mysql_connect("localhost","root") or die("PROBLEMAS AL CONECTAR EL SERVIDOR");
	mysql_select_db("profedex", $conexion) or die("ERROR AL CONECTAR CON LA BASE DE DATOS");
	$usuarioNormal = mysql_num_rows(mysql_query("SELECT nombreU FROM Usuarios where nombreU = '$nombre' and passwUsuario = '$pass'"));
	$administrador = mysql_num_rows(mysql_query("SELECT nombreU FROM Usuarios where nombreU = '$nombre' and passAdmin = '$pass'"));
	
	if($usuarioNormal!=0){
	//cerramos php para meter html
		echo "Bienvenido, (a) ";
		echo $nombre;
	}else if ($administrador!=0) {
		header("Location: inicioAdmin.html");
	}else{
		
			//header("Location: registrarse.html");
		?>
		<script type="text/javascript">
			alert("Contraseña o usuario incorrecto!");
			window.open("registrarse.html");
		</script>
		<?php
	}
?>
</html>