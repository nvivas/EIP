<?php

require_once('./conexion.php');

$collection = $habitacion->nacho->habitacion;

$snum_habitacion = $_GET['num_habitacion'];

$filtro = ["num_habitacion" => $snum_habitacion];

$resultado = $collection->find($filtro);
?>

<!DOCTYPE html>
<html lang="es">

<head>
	<?php require_once('./head.php'); ?>
</head>

<body>
	<form method='post' action='actualizarDatosHabitaciones.php' name='formulario2' onSubmit='return Valida(this);'>
		<?php
		// Ejecutar una consulta y obtener un cursor
		$cursor = $collection->find();

		foreach ($cursor as $document) {
		?>

			<div class="contenedorForm">
				<div class="item">
					<label for="nombre">NÚMERO DE HABITACION</label>
					<input type='text' name='num_habitacion' value=<?= $fila['num_habitacion'] ?> readonly>
				</div>
				<div class="item">
					<label for="tipo_habitacion">TIPO DE HABITACION (individual, Matrimonio, Doble)</label>
					<input type='text' name='tipo_habitacion' value=<?= $fila['tipo_habitacion'] ?>>
				</div>
				<div class="item">
					<label for="temporada">TEMPORADA</label>
					<input type='text' name='temporada' value=<?= $fila['temporada'] ?>>
				</div>
				<div class="item">
					<label for="cuna">CUNA</label>
					<input type='text' name='cuna' value=<?= $fila['cuna'] ?>>
				</div>
				<div class="item">
					<label for="cliente_dni">DNI del CLIENTE</label>
					<input type='text' name='cliente_dni' value=<?= $fila['cliente_dni'] ?>>
				</div>

				<div>
					<input type='submit' value='GUARDAR' name='enviar' class="guardar">
				</div>
				<div class="volver">
					<a href='habitacion.php'>VOLVER</a>
				</div>
			</div>
		<?php
		}
		?>
	</form>

</body>

</html>