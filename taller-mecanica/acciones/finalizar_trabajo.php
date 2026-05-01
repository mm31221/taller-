<?php 
	include_once("../conexion.php");

	// busco el id del trabajo finalizado y lo almaceno en una variable variable

	$id = $_POST['id_trabajo'];

	// hago la consulta para eliminar el trabajo que tenga el id igual a la variable $id

	$query = "DELETE FROM trabajos WHERE id = '$id'";

	$resultado = mysqli_query($mysqli, $query);

	// si la eliminación se hizo perfectamente o sino se hizo

	if($resultado){
		header("location: ../controles.php");
	}else{
		echo "algo salió mal";
		header("Refresh: 3, location: ../controles.php");
	}
?>