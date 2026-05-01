<?php 

	include("conexion.php");


	//consulto en la base de datos los registros de mecanicos, marcas, puertas y tipos y los guardo como un array

	$query = "SELECT * FROM mecanicos";
	$resultado = mysqli_query($mysqli, $query);
	$v_mecanicos = mysqli_fetch_all($resultado, MYSQLI_ASSOC);

	$query = "SELECT * FROM marcas";
	$resultado = mysqli_query($mysqli, $query);
	$v_marcas = mysqli_fetch_all($resultado, MYSQLI_ASSOC);

	$query = "SELECT * FROM puertas";
	$resultado = mysqli_query($mysqli, $query);
	$v_puertas = mysqli_fetch_all($resultado, MYSQLI_ASSOC);

	$query = "SELECT * FROM tipos";
	$resultado = mysqli_query($mysqli, $query);
	$v_tipos = mysqli_fetch_all($resultado, MYSQLI_ASSOC);

?>
<!DOCTYPE html>
<html lang="en">
<?php include("fabricados/head.php"); ?>

<style>	
	.form-control{
		margin-bottom: 10px
	}
</style>
<body>
<?php include("fabricados/navbar.php"); ?>

<div class="container">
		<br>
	<h2 style="border-radius:20px;padding:20px;	color:white;background: #191E35">Carga de Trabajos</h2>
	<div class="d-none d-sm-block"><br><br><br></div>
	<form action="acciones/agregar_trabajo.php" method="post" style="text-align: center;padding: 50px;border-radius: 20px;background: #191E35 ;position: relative;">
		<div class=" d-md-block">
			<div class="row">
				<input required="" autocomplete="off" name="cliente" type="text" class="form-control text-dark col-12 col-md-6" placeholder="Ingrese el nombre del cliente">
				<select class="form-control text-dark col-12 col-md-6" style="width: 50%;display: inline-block;" name="id_mecanico" id="">
					<option disabled="">Seleccione el mecanico</option>
					<?php
						// agrego como opcion el siguiente array
						foreach($v_mecanicos as $v_m){
							if($v_m['nombre'] != ""){
								echo "<option value='".$v_m['id']."'>".$v_m['nombre']." ".$v_m['apellido']."</option>";
							}
						}
					?>
				</select>
				<select class="form-control text-dark col-12 col-md-6" style="width: 50%;display: inline-block;" name="id_tipo" id="">
					<option disabled="">Seleccione el tipo de vehículo</option>
					<?php
						// agrego como opcion el siguiente array
						foreach($v_tipos as $v_t){
							if($v_t['tipo'] != ""){
								echo "<option value='".$v_t['id']."'>".$v_t['tipo']."</option>";
							}
						}
					?>
				</select>	
				<select class="form-control text-dark col-12 col-md-6" style="width: 50%;display: inline-block;" name="id_marca" id="">
					<option disabled>Seleccione la marca del vehículo</option>
					<?php
						// agrego como opcion el siguiente array
						foreach($v_marcas as $v_ma){
							if($v_ma['marca'] != ""){
								echo "<option value='".$v_ma['id']."'>".$v_ma['marca']."</option>";
							}
						}
					?>
				</select>
				<input required="" autocomplete="off" name="modelo" type="text" class="form-control text-dark col-12 col-md-6" placeholder="Ingrese el modelo del vehículo">
				<select class="form-control text-dark col-12 col-md-6" style="width: 50%;display: inline-block;" name="id_puertas" id="">
					<option disabled>Seleccione la cantidad de puertas del vehículo</option>
					<?php
						// agrego como opcion el siguiente array
						foreach($v_puertas as $v_p){
							if($v_p['puerta'] != ""){
								echo "<option value='".$v_p['id']."'>".$v_p['puerta']."</option>";
							}
						}
					?>
				</select>
				<input required="" autocomplete="off" name="patente" type="text" class="form-control text-dark col-12 col-md-6" placeholder="Ingrese la patente del vehículo">
				<input required="" autocomplete="off" name="color" type="text" class="form-control text-dark col-12 col-md-6" placeholder="Ingrese el color del vehículo">
			</div>
			<div class="row">
				<textarea name="comentarios" placeholder="Ingrese algun comentario (opcional)" class="form-control text-dark" id="" style="height:100px;resize: none" cols="30" rows="10"></textarea>
			</div>
			<div class="row">
				<button type="reset" class="btn btn-danger col-12 col-md-6">Borrar</button>
				<button class="btn btn-info col-12 col-md-6">Agregar</button>
			</div>
		</div>
	</form>
</div>

<?php include("fabricados/footer.php"); ?>
</body>
</html>