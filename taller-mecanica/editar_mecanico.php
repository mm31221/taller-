<?php 
	include("conexion.php");

	//si no tengo en la url un dato GET vuelvo a mis mecanicos

	if(!$_GET){
		header("location: mis_mecanicos.php");
	}

	// si tengo en la url un dato GET consulto en la BD y guardo en un array el mecanico con ese id

	$query = "SELECT * FROM mecanicos WHERE id =".$_GET['id'];
	$resultado = mysqli_query($mysqli, $query);
	$v_mecanicos = mysqli_fetch_array($resultado, MYSQLI_ASSOC);


?>
<!DOCTYPE html>
<html lang="en">
<?php include("fabricados/head.php"); ?>
<body>
<?php include("fabricados/navbar.php"); ?>
	<div class="container">
		<br>
		<h2 style="border-radius:20px;padding:20px;	color:white;background: #191E35">Mis mecánicos</h2>
		<div class="d-none d-sm-block"><br><br><br></div>

		<div style="text-align: center;padding: 50px;border-radius: 20px;background: #191E35;position: relative;" >
			<form id="form_editar" action="acciones/editar_mecanico.php" method="post">
				<div class="row justify-content-center text-light">
					<input type="hidden" name="id" value="<?php echo $v_mecanicos['id']?>">
					<label for="" class="col-12 text-left">dni<br>	
						<input class="form-control text-dark" type="text" name="dni" value="<?php echo $v_mecanicos['dni'] ?>" placeholder="<?php echo $v_mecanicos['dni'] ?>" required>
					</label>
					<label for="" class="col-12 text-left">nombre<br>
						<input class="form-control text-dark" type="text" name="nombre" value="<?php echo $v_mecanicos['nombre'] ?>" placeholder="<?php echo $v_mecanicos['nombre'] ?>" required>
					</label>
					<label for="" class="col-12 text-left">apellido<br>	
						<input class="form-control text-dark" type="text" name="apellido" value="<?php echo $v_mecanicos['apellido'] ?>" placeholder="<?php echo $v_mecanicos['apellido'] ?>" required>
					</label>
					<label for="" class="col-12 text-left">calle<br>	
						<input class="form-control text-dark" type="text" name="calle" value="<?php echo $v_mecanicos['calle'] ?>" placeholder="<?php echo $v_mecanicos['calle'] ?>" required>
					</label>
					<label for="" class="col-12 text-left">localidad<br>	
						<input class="form-control text-dark" type="text" name="localidad" value="<?php echo $v_mecanicos['localidad'] ?>" placeholder="<?php echo $v_mecanicos['localidad'] ?>" required>
					</label>
					<div class="row col-12">
						<button class="col-6 btn btn-success">Actualizar datos</button>
						<button type="button" class="col-6 btn btn-light" onclick="window.location.href = 'mis_mecanicos.php'">Cancelar</button>
					</div>
				</div>
			</form>
			<br>
			<form id="form_eliminar" action="acciones/eliminar_mecanico.php" method="post" class="row">	
				<input type="hidden" name="id_m" value="<?php echo $v_mecanicos['id'] ?>">
				<div class="col-12">
					<button class="col-12 btn btn-danger">Eliminar mecánico</button>
				</div>
			</form>
		</div>
	</div>
</body>
<script>
	ctt = 0;

	//envio el formulario para editar el mecanico
	$("#form_editar").submit(function(e){
		if(!ctt){	
			ctt = 1
			e.preventDefault()

			c = confirm("Quiere guardar los datos")
			if(c){
				$("#form_editar").submit()
			}
		}
	})	

	//envio el formulario para eliminar el mecanico
	$("#form_eliminar").submit(function(e){
		if(!ctt){	
			ctt = 1
			e.preventDefault()

			c = confirm("Está seguro de eliminar este usuario")
			if(c){
				$("#form_eliminar").submit()
			}
		}
	})	
</script>
</html>