<?php 
	include("conexion.php");

	//consulto todos los mecanicos en mi BD y los almaceno en un array

	$query = "SELECT * FROM mecanicos";
	$resultado = mysqli_query($mysqli, $query);
	$v_mecanicos = mysqli_fetch_all($resultado, MYSQLI_ASSOC);
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

		<div style="text-align: center;padding: 20px 50px 50px 50px;border-radius: 20px;background: #191E35;position: relative;" >
			<a href="mecanicos.php" class="text-white">agregar mecanico</a>
			<div class="row justify-content-center p-0 mt-3">
			<?php 
				foreach ($v_mecanicos as $key => $v_m) {
					// muestro todos los mecánicos
			?>
					<div class="col-12 col-sm-6 col-lg-4 p-0">
						<div class="m-1 border rounded">
							<div class="text-light text-left border-bottom"><?php echo $v_m['dni'] ?></div>
							<div class="text-light border-bottom"><?php echo $v_m['nombre'] ?></div>
							<div class="text-light border-bottom"><?php echo $v_m['apellido'] ?></div>
							<div class="text-light text-right border-bottom"><span style="cursor:pointer;" onclick="editar_mecanico(<?php echo $v_m['id'] ?>)">editar</span></div>
						</div>
					</div>
			<?php
				}
			?>
			</div>
		</div>
	</div>
</body>
<script>
	//voy a editar mecanico y guardo en la url el id del mecanico como un dato GET
	function editar_mecanico(id){
		window.location.href = "editar_mecanico.php?id="+id
	}
</script>
</html>