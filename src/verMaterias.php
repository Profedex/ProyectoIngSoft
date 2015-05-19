<html>
	<head>
		<title>Ver Materias</title>
		<meta charset = "UTF-8">
		<link rel="stylesheet" type="text/css" href="css/es.css">
		</head>

	<body>
		<?php
			include("principal.php");
		?>

		<table class = "tablaU" border="1" style="width:75%">
		
		<?php
			$resultadoBusqueda = mysql_query("SELECT * FROM materias");
			while ($row = mysql_fetch_assoc($resultadoBusqueda)) {
				echo "<tr>";
				echo "<td>".$row['id']."</td>";
				echo "<td>".$row['nombre']."</td>";
    			echo "<td>".$row['existe']."</td>";
    			echo "</tr>";
			}
		?>
		</table>
	</body>

</html>
