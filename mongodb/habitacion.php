<?php
require_once('./conexion.php');

// consulta SQL
$res = "SELECT * FROM habitacion";
$resultado = mysqli_query($conexion, $res);
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<?php
	require_once('./head.php');
	?>
</head>

<body>
	<h2>Habitaciones</h2>
	<div class="crud">
		<a href='insertarHabitacion.php' class="insertar">Insertar Habitación</a>
		<a href='buscarHabitacion.php' class="buscar">Buscar Habitación</a>
	</div>

	<!-- tabla habitaciones -->
	<?= require_once('./tablaHabitacionInicial.php') ?>
	<div class="volver">
		<a href='index.php'>VOLVER</a>
	</div>

</body>

</html>
<?php
mysqli_free_result($resultado);
?>