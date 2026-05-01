<?php 
	include_once("../conexion.php");

    // busco los datos en tipo post y los almaceno en variables

	$cliente = $_POST['cliente'];
	$id_mecanico = $_POST['id_mecanico'];
	$id_marca = $_POST['id_marca'];
	$id_tipo = $_POST['id_tipo'];
	$id_puertas = $_POST['id_puertas'];
	$modelo = $_POST['modelo'];
	$patente = $_POST['patente'];
	$color = $_POST['color'];
	$comentarios = $_POST['comentarios'];

	// hago la consulta para insertar los datos seleccionados en mecanicos

	$query = "INSERT INTO trabajos VALUES (null,'$cliente', '$id_mecanico', '$id_marca', '$id_tipo', '$id_puertas', '$modelo', '$patente', '$color',null, '$comentarios')";

	$resultado = mysqli_query($mysqli, $query);

	// si la inserción se hizo perfectamente o sino se hizo

	if($resultado){
		header("location: ../agregar_trabajo.php");
	}else{
		echo "algo salió mal";
		header("Refresh: 3, location: ../agregar_trabajo.php");
	}
?>