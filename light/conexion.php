<?php
	$servidor = "localhost";
	$bd = "trazos";
	$usuario = "root";
	$pass = "";

	$conn = new mysqli($servidor,$usuario, $pass, $bd);

	/*$query = "SELECT * FROM usuario";
	$res = mysqli_query($conexion,$query);

	while ($fila = mysqli_fetch_array($res)) 
	{
		$bandera = 1;
		$id_usuario = "$fila[id_usuario]";
		$nombre = "$fila[nombre]";
		$tipo = "$fila[tipo]";

		echo "$id_usuario, $nombre, $tipo";
	}*/

?>