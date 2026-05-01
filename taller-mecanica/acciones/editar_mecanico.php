<?php 
	include_once("../conexion.php");

    // busco los datos actualizados del mecanico y los almaceno en variables

	$id = $_POST['id'];
	$nombre = $_POST['nombre'];
	$apellido = $_POST['apellido'];
	$dni = $_POST['dni'];
	$calle = $_POST['calle'];
	$localidad = $_POST['localidad'];

	// hago la consulta para actualizar los datos seleccionados en mecanicos

	$query = "UPDATE mecanicos SET nombre = '$nombre', apellido = '$apellido', dni = '$dni', calle = '$calle', localidad = '$localidad' WHERE id = '$id'";

	$resultado = mysqli_query($mysqli, $query);

	// si la actualización se hizo perfectamente o sino se hizo

	if($resultado){
		header("location: ../mis_mecanicos.php");
	}else{
		echo "algo salió mal";
		header("Refresh: 3, location: ../mis_mecanicos.php");
	}
?>