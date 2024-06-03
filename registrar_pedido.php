<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="styles.css">
	<title>Clientes</title>
</head>
<body class="main">
	<form class="form_registro" action="procesarRegistroPedido.php" method="post">
		<table align="center">
			<tr>
				<td>Cliente</td>
				<td>
					<input type="text" name="cliente">
				</td>
			</tr>
			<tr>
				<td>Fecha</td>
				<td>
					<input type="date" name="fecha">
				</td>
			</tr>
			<tr>
				<td>Total</td>
				<td>
					<input type="number" name="total">
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
		$sql = "SELECT c.nombre,c.email,c.telefono,p.total FROM pedidos AS p INNER JOIN clientes AS c ON c.cliente_id = p.cliente_id;";
		$res = mysqli_query($con, $sql);
		if($res==false){
			echo "no hay registros";
		}else{
	?>

	<table border='1' align='auto' style="margin:5px">
		<tr>
			<td>Nombre</td>
			<td>Email</td>
			<td>Telefono</td>
			<td>Total</td>
		</tr>

	<?php
		while($vec = mysqli_fetch_array($res)){
				echo "<tr>";
				echo"<td>$vec[0]</td>";
				echo"<td>$vec[1]</td>";
				echo"<td>$vec[2]</td>";
				echo"<td>$vec[3]</td>";
			echo"</tr>";
		}
			echo "</table>";
		}
    ?>
</body>
</html>