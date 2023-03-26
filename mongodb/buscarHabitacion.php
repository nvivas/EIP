<?php
require_once('./conexion.php');
?>
<!DOCTYPE html>
<html lang="es">

<head>
	<?php require_once('./head.php'); ?>
</head>

<body>
	<form method='post' action='buscarDatosHabitacion.php' name='formulario1' onSubmit='return Valida(this);'>
		<div class="contenedorForm">
			<div class="item">
				<label for="nombre">NÚMERO DE HABITACION</label>
				<input type='text' name='num_habitacion'>
			</div>
			<div class="item">
				<label for="tipo_habitacion">TIPO DE HABITACION (individual, Matrimonio, Doble)</label>
				<input type='text' name='tipo_habitacion'>
			</div>
			<div class="item">
				<label for="temporada">TEMPORADA</label>
				<input type='text' name='temporada'>
			</div>
			<div class="item">
				<label for="cuna">CUNA</label>
				<input type='text' name='cuna'>
			</div>
			<div class="item">
				<label for="cliente_dni">DNI del CLIENTE</label>
				<input type='text' name='cliente_dni'>
			</div>

			<div>
				<input type='submit' value='GUARDAR' name='enviar' class="guardar">
			</div>
			<div class="volver">
				<a href='habitacion.php'>VOLVER</a>
			</div>
		</div>
	</form>
</body>

</html>