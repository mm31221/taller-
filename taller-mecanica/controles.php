<?php 

	include("conexion.php");

	//consulto en la base de datos los registros de trabajos, marcas, y mecanicos y los guardo como un array

	$query = "SELECT * FROM trabajos";
	$resultado = mysqli_query($mysqli, $query);
	$v_trabajos = mysqli_fetch_all($resultado, MYSQLI_ASSOC);

	$query = "SELECT * FROM marcas";
	$resultado = mysqli_query($mysqli, $query);
	$v_marcas = mysqli_fetch_all($resultado, MYSQLI_ASSOC);

	$query = "SELECT * FROM mecanicos";
	$resultado = mysqli_query($mysqli, $query);
	$v_mecanicos = mysqli_fetch_all($resultado, MYSQLI_ASSOC);

?>	
<!DOCTYPE html>
<!-- Incluyo dinamicamente los modulos de head y navbar -->
<html lang="en">
<?php include("fabricados/head.php"); ?>
<body>
<?php include("fabricados/navbar.php"); ?>
<style>
	*{
		padding: 0;
		margin:0;
	}
	table{
		background-color:#191E35;
		border-radius:20px;
		overflow: hidden;
		border:1px solid  #191E35;
	}
	td,th{
		color:white;
	}
</style>
<div class="container">
	<br>
	<h2 style="border-radius:20px;padding:20px;	color:white;background: #191E35">Control de Trabajos</h2>
	<div class="d-none d-sm-block"><br><br><br></div>
	<table class="table">
	<?php if(count($v_trabajos) != 0){ ?>
	    <thead>
	      <tr>
	        <th>Cliente</th>
	        <th>Auto</th>
	        <th>Patente</th>
	        <th>Mecanico</th>
	        <th>Fecha de Carga</th>
	        <th></th>
	      </tr>
	    </thead>
	<?php }else{
		echo "<h1 class='text-white'>No hay trabajos</h1>";
	} ?>
	    <tbody>
			<?php 
				foreach($v_trabajos as $v_t){
				echo "<tr>";
					foreach ($v_marcas as $v_ma){
						if($v_t['id_marca'] == $v_ma['id']){
							echo "<td>".$v_t['cliente']."</td>"; 
							echo "<td>".$v_ma['marca']." ".$v_t['modelo']." ".$v_t['color']."</td>";
							echo "<td>".$v_t['patente']."</td>"; 
						}
					}
					foreach($v_mecanicos as $v_me){
						if($v_t['id_mecanico'] == $v_me['id']){
							echo "<td>".$v_me['nombre']." ".$v_me['apellido']."</td>"; 
						}
					}
					foreach ($v_marcas as $v_ma){
						if($v_t['id_marca'] == $v_ma['id']){
							echo "<td>".$v_t['fecha']."</td>"; 
						}
					}

				echo "
					<td style='cursor:pointer' onclick='finalizar_trabajo(".$v_t['id'].")'>finalizar</td>
						</tr>
					";
				}
			?>
    </tbody>
  </table>
  <form action="acciones/finalizar_trabajo.php" method="post">
  	<input type="hidden" name="id_trabajo" id="id_trabajo">
  </form>
</div>
<?php include("fabricados/footer.php"); ?>
<script>
	// cuando el trabajo ya este realizado envio el formulario a la accion de finalizar trabajo
	function finalizar_trabajo(id){
		document.querySelector("#id_trabajo").value = id;
		c = confirm("Finalizar trabajo")
		if(c){
			$("form").submit();
		}
	}
</script>
</body>
</html>