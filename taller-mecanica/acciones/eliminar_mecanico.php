<?php 
	include_once("../conexion.php");

	// busco el id del mecanico a eliminar y lo almaceno en una variable variable

	$id = $_POST['id_m'];

	// hago la consulta para eliminar el mecanico que tenga el id igual a la variable $id

	$query = "DELETE FROM mecanicos WHERE id = '$id'";

	$resultado = mysqli_query($mysqli, $query);

	// si la eliminación se hizo perfectamente o sino se hizo

	if($resultado){
		header("location: ../mis_mecanicos.php");
	}else{
		echo "algo salió mal";
		header("Refresh: 3, location: ../mis_mecanicos.php");
	}
?>