<?php 
	include_once("../conexion.php");

	// busco los datos en tipo post y los almaceno en variables

	$nombre = $_POST['nombre'];
	$apellido = $_POST['apellido'];
	$dni = $_POST['dni'];
	$calle = $_POST['calle'];
	$localidad = $_POST['localidad'];

	// hago la consulta para insertar los datos seleccionados en mecanicos

	$query = "INSERT INTO mecanicos VALUES (null,'$nombre', '$apellido', '$dni', '$calle', '$localidad')";

	$resultado = mysqli_query($mysqli, $query);

	// si la insercion se hizo perfectamente o sino se hizo
	
	if($resultado){
		header("location: ../index.php");
	}else{
		echo "algo salió mal";
		header("Refresh: 3, location: ../index.php");
	}
?>