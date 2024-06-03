<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="styles.css">
	<title>Clientes</title>
</head>
<body class="main">
	<form class="form_registro" action="procesarRegistroProductos.php" method="post">
		<table align="center">
			<tr>
				<td>Nombre</td>
				<td>
					<input type="text" name="nombre">
				</td>
			</tr>
			<tr>
				<td>Descripcion</td>
				<td>
					<input type="text" name="descripcion">
				</td>
			</tr>
			<tr>
				<td>Precio</td>
				<td>
					<input type="number" name="precio">
				</td>
			</tr>
			<tr>
				<td><input type="reset" value="BORRAR"></td>
				<td><input type="submit" value="REGISTRAR"></td>
			</tr>
		</table>
	</form>
	<?php
		include("conection.php");
		$sql = "SELECT p.nombre,p.descripcion,p.precio FROM productos AS p;";
		$res = mysqli_query($con, $sql);
		if($res==false){
			echo "no hay registros";
		}else{
	?>

	<table border='1' align='auto' style="margin:5px">
		<tr>
			<td>Nombre</td>
			<td>Descripcion</td>
			<td>Precio</td>
		</tr>

	<?php
		while($vec = mysqli_fetch_array($res)){
				echo "<tr>";
				echo"<td>$vec[0]</td>";
				echo"<td>$vec[1]</td>";
				echo"<td>$vec[2]</td>";
			echo"</tr>";
		}
			echo "</table>";
		}
    ?>
</body>
</html>