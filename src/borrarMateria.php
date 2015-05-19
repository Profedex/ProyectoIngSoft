<html>
	<head>
		<title>Eliminar Materias</title>
		<meta charset = "UTF-8">
		</head>

	<body>
		<?php
			include("verMaterias.php");
		?>
		<form class = "U" method="POST" action="">
			<input type= "text" placeholder="ID de la materia a borrar" name="id">
			<button type="submit" name="enviar">Eliminar</button>
			<button type="button" onclick="window.location.reload()">Actualizar</button>
		</form>
		<?php
		if(!isset($_SESSION['usuarioLogiado'])){
			header("location: registrarse.php");
		}

		if (isset($_POST['enviar'])) {
			if (empty($_POST['id'])) {
				?>
		    		<script>
		    		alert("Introduzca el id del usuario a eliminar!");
		    		</script>
	    		<?php
			}else{
			
				$id = $_POST['id'];
					
				$sql = "UPDATE materias SET existe = '0'WHERE id = '$id'";

				if (mysql_query($sql) === TRUE) {
					?>
		    		<script>
		    		alert("Se ha eliminado exitosamente la materia!");
		    		</script>
		    		<?php
				} else {
		    		echo "Error al borrar";
				}
			}
		}
		?>	
	</body>

</html>
