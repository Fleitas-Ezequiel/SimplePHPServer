<<<<<<< HEAD
<!DOCTYPE html>
<html lang="es">
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

	?>
</body>
=======
<!DOCTYPE html>
<html lang="es">
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

	?>
</body>
>>>>>>> 567fccf308cc5031cda3e9709e6f41b82b8eb4a7
</html>