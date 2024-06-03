<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Clientes</title>
</head>
<body class="main">
	<form class="form_registro" action="procesarRegistroCliente.php" method="POST">
		<table>
			<tr>
				<td>Nombre</td>
				<td>
					<input type="text" name="nombre">
				</td>
			</tr>
			<tr>
				<td>Email</td>
				<td>
					<input type="email" name="email">
				</td>
			</tr>
			<tr>
				<td>Telefono</td>
				<td>
					<input type="number" name="tel">
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
		$sql = "SELECT c.nombre,c.email,c.telefono FROM clientes AS c;";
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