<!DOCTYPE html>
<html lang="en">
<!-- Incluyo dinamicamente el head y navbar -->
<?php include("fabricados/head.php"); ?>
<body>
	<?php include("fabricados/navbar.php"); ?>
	<div class="container">
			<br>
			<h2 style="border-radius:20px;padding:20px;	color:white;background: #191E35">Carga de Mecanicos</h2>
		<div class="d-none d-sm-block"><br><br><br></div>
		<form action="acciones/agregar_mecanico.php" method="post" style="text-align: center;padding: 50px;border-radius: 20px;background: #191E35;position: relative;" >
				<div class="row">
					<input required="" autocomplete="off" name="nombre" type="text" class="form-control text-dark col-12 col-md-6" style="margin-bottom: 10px" placeholder="Ingrese el nombre">
					<input required="" autocomplete="off" name="apellido" type="text" class="form-control text-dark col-12 col-md-6" style="margin-bottom: 10px" placeholder="Ingrese el apellido">
				</div>
				<div class="row">
					<input required="" autocomplete="off" name="dni" type="text" class="form-control text-dark col-12" style="margin-bottom: 10px" placeholder="Ingrese el dni">
				</div>
				<div class="row">
					<input required="" autocomplete="off" name="calle" type="text" class="form-control text-dark col-12 col-md-6" style="margin-bottom: 10px" placeholder="Ingrese la calle">
					<input required="" autocomplete="off" name="localidad" type="text" class="form-control text-dark col-12 col-md-6" style="margin-bottom: 10px" placeholder="Ingrese la localidad"><br>
				</div>
				<div class="row">
					<button type="reset" class="btn btn-danger col-12 col-md-6">Borrar</button>
					<button class="btn btn-info col-12 col-md-6">Agregar</button>
				</div>
		</form>
	</div>
	<?php include("fabricados/footer.php"); ?>
</body>
</html>