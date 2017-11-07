<?php
	include ("conexion.php");

	$query = "SELECT * FROM usuario";
	$res = mysqli_query($conexion,$query);

	while ($fila = mysqli_fetch_array($res)) 
	{
		$bandera = 1;
		$id_usuario = "$fila[id_usuario]";
		$nombre = "$fila[nombre]";
		$tipo = "$fila[tipo]";

		//echo "$id_usuario, $nombre, $tipo";
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Consulta</title>
</head>
<body>

	<?php echo "<label>$id_usuario $nombre $tipo</label>";?>

</body>
</html>