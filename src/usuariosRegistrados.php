<html>
	<head>
		<title>Ver Usuarios</title>
		<meta charset = "UTF-8">
		<link rel="stylesheet" type="text/css" href="css/es.css">
		</head>

	<body>
		<?php
			include("principal.php");
			include("borrarUsuario.php");				
		?>

		<form class = "U" action="usuariosRegistrados.php" method="POST">
			<input type = "text" name= "id" placeholder="ID del usuario a eliminar">
			<button type = "submit" name="submit">Eliminar</button>
		</form>

		<table class = "tablaU" border="1" style="width:75%">
		
		<?php
			$resultadoBusqueda = mysql_query("SELECT * FROM Usuarios");
			while ($row = mysql_fetch_assoc($resultadoBusqueda)) {
				echo "<tr>";
				echo "<td>".$row['id_usuario']."</td>";
    			echo "<td>".$row['nombreU']."</td>";
    			echo "<td>".$row['tipo']."</td>";
    			echo "</tr>";
			}
		?>
		</table>

		
	</body>

</html>

