<<<<<<< HEAD
<?php
    include("conection.php");
		$cliente=$_POST["cliente"];
		$fecha=$_POST["fecha"];
        $total=$_POST["total"];

		$query="INSERT INTO pedidos(cliente_id, fecha, total) VALUES($cliente, $fecha, $total)";

		$res = mysqli_query($con, $query);

		if($res==true){
			echo "Se registro correctamente";
			
	}else{
			echo "No se registro correctamente";
	}
=======
<?php
    include("conection.php");
		$cliente=$_POST["cliente"];
		$fecha=$_POST["fecha"];
        $total=$_POST["total"];

		$query="INSERT INTO pedidos(cliente_id, fecha, total) VALUES($cliente, $fecha, $total)";

		$res = mysqli_query($con, $query);

		if($res==true){
			echo "Se registro correctamente";
			
	}else{
			echo "No se registro correctamente";
	}
>>>>>>> 567fccf308cc5031cda3e9709e6f41b82b8eb4a7
?>