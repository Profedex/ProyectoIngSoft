<?php
	$error="";//variable auxiliar ara un error
	if(!isset($_SESSION['usuarioLogiado'])){
		header("location: registrarse.php");
	}

	if (isset($_POST['submit'])) {
		if (empty($_POST['id'])) {
			?>
	    		<script>
	    		alert("Introduzca el id del usuario a eliminar!");
	    		</script>
	    		<?php
		}else{
			
			$nombre = $_POST['id'];
				
			$sql = "DELETE FROM Usuarios WHERE id_usuario=$nombre";

			if (mysql_query($sql) === TRUE) {
				?>
	    		<script>
	    		alert("Se ha eliminado exitosamente!");
	    		</script>
	    		<?php
			} else {
	    		echo "Error al borrar";
			}
		}
	}	
?>