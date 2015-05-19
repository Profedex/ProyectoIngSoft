<?php
	$servidor = "localhost";
	$usuario = "root";
	$contra = "";
	$basedatos = "profedex";
	$conexion = mysql_connect($servidor,$usuario,$contra) or die ("No se pudo conectar al servidor");
	mysql_select_db($basedatos,$conexion) or die("No se pudo conectar a la base de datos");

?>