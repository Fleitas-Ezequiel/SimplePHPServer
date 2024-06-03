<<<<<<< HEAD
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

	?>
</body>
=======
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

	?>
</body>
>>>>>>> 567fccf308cc5031cda3e9709e6f41b82b8eb4a7
</html>