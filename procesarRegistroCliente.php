<<<<<<< HEAD
<?php
    include("conection.php");
	$name=$_POST["nombre"];
	$mail=$_POST["email"];
	$tel=$_POST["tel"];

	$query="INSERT INTO clientes(nombre, email, telefono) VALUES('$name', '$mail', $tel)";

	$res = mysqli_query($con, $query);

	if($res==true){
		echo "Se registro correctamente";
			
	}else{
			echo "No se registro correctamente";
	}
=======
<?php
    include("conection.php");
	$name=$_POST["nombre"];
	$mail=$_POST["email"];
	$tel=$_POST["tel"];

	$query="INSERT INTO clientes(nombre, email, telefono) VALUES('$name', '$mail', $tel)";

	$res = mysqli_query($con, $query);

	if($res==true){
		echo "Se registro correctamente";
			
	}else{
			echo "No se registro correctamente";
	}
>>>>>>> 567fccf308cc5031cda3e9709e6f41b82b8eb4a7
?>