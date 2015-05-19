<html>
	<head>
		<title>Ver Usuarios</title>
		<meta charset = "UTF-8">
		<link rel="stylesheet" type="text/css" href="css/es.css">
		</head>

	<body>
		<?php
			include("principal.php");

		?>

		<table class = "tablaU" border="1" style="width:75%">
		<?php
			$resultadoBusqueda = mysql_query("SELECT * FROM maestros");
			while ($row = mysql_fetch_assoc($resultadoBusqueda)) {
				echo "<tr>";
				echo "<td>".$row['id']."</td>";
    			echo "<td>".$row['nombre']."</td>";
    			//echo "<td>".$row['id_maestro1']."</td>";
    			//echo "<td>".$row['id_maestro2']."</td>";
    			//echo "<td>".$row['id_maestro3']."</td>";
    			echo "</tr>";
			}
		?>

		</table>
	</body>

</html>
