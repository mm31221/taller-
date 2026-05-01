<!DOCTYPE html>
<!-- Incluyo dinamicamente el head y navbar -->
<html lang="en">
<?php include("fabricados/head.php"); ?>
<body>
<?php include("fabricados/navbar.php"); ?>
<style>
	.div_span{
		background-color:#EEEEEE;
		border:1px solid;
		margin:20px 0;
		padding: 20px;
		border-radius: 20px;
		box-shadow:inset 0 0 20px 0 grey;
		user-select: none;
		cursor: pointer;
	}
	.div_span:hover{
		box-shadow: 0 0 20px 0 grey;
	}

	.row{
		padding: 20px;
	}
</style>
<div class="container">
	<?php include("conexion.php") ?>
	<br>
	<h2 style="border-radius:20px;padding:20px;	color:white;background: #191E35">Taller De Mecanica</h2>
	<div class="d-none d-sm-block"><br><br><br></div>
	<center>
		<div class="row">
			<div class="div_span col-12 col-md-6"><p>Arreglaremos tu auto y lo verás como nuevo</p></div>
			<div class="div_span col-12 col-md-6"><p>Cambiaremos la pintura y no lo reconocerás</p></div>
		</div>
		<div class="row">
			<div class="div_span col-12 col-md-6"><p>Cambiaremos el aceite y control de correa</p></div>
			<div class="div_span col-12 col-md-6"><p>Eliminaremos las estrellas de busqueda</p></div>
		</div>
	</center>
</div>
<?php include("fabricados/footer.php"); ?>
</body>
</html>