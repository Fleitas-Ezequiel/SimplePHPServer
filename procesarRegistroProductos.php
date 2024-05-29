<?php
    include("conection.php");
		$name=$_POST["nombre"];
		$descripcion=$_POST["descripcion"];
		$precio=$_POST["precio"];

		$query="INSERT INTO productos(nombre, descripcion, precio) VALUES('$name', '$descripcion', $precio)";

		$res = mysqli_query($con, $query);

		if($res==true){
			echo "Se registro correctamente";
			
	}else{
			echo "No se registro correctamente";
	}
?>