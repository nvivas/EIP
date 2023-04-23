<?php

require_once('./conexion.php');

$collection = $cliente->nacho->cliente;

$sdni = $_GET['dni'];

$filtro = ["dni" => $sdni];

$resultado = $collection->find($filtro);

?>

<!DOCTYPE html>
<html lang="es">

<head>
	<?php require_once('./head.php'); ?>
</head>

<body>
	<h2>Actualizar Cliente</h2>

	<form method='post' action='actualizarDatosCliente.php' name='formulario1' onSubmit='return Valida(this);'>
		<?php
		// Ejecutar una consulta y obtener un cursor
		$cursor = $collection->find();

		foreach ($cursor as $document) {
		?>
			<div class="contenedorForm">
				<div class="item">
					<label for="dni">DNI</label>
					<input type="text" name="dni" value=<?= $fila['dni'] ?> readonly>
				</div>

				<div class="item">
					<label for="nombre">NOMBRE</label>
					<input type='nombre' name='nombre' value=<?= $fila['nombre'] ?>>
				</div>

				<div class="item">
					<label for="apellidos">APELLIDOS</label>
					<input type='text' name='apellidos' value=<?= $fila['apellidos'] ?>>
				</div>

				<div class="item">
					<label for="anyo_nacimiento">AÑO DE NACIMIENTO</label>
					<input type='text' name='anyo_nacimiento' value=<?= $fila['anyo_nacimiento'] ?>>
				</div>
				<div class="item">
					<label for="telefono">TELEFONO</label>
					<input type='text' name='telefono' value=<?= $fila['telefono'] ?>>
				</div>
				<div class="item">
					<label for="direccion">DIRECCION</label>
					<input type='text' name='direccion' value=<?= $fila['direccion'] ?>>
				</div>
				<div class="item">
					<label for="codigo_postal">CODIGO POSTAL</label>
					<input type='text' name='codigo_postal' value=<?= $fila['codigo_postal'] ?>>
				</div>
				<div class="item">
					<label for="poblacion">POBLACION</label>
					<input type='text' name='poblacion' value=<?= $fila['poblacion'] ?>>
				</div>
				<div class="item">
					<label for="provincia">PROVINCIA</label>
					<input type='text' name='provincia' value=<?= $fila['provincia'] ?>>
				</div>
				<div class="item">
					<label for="pais">PAIS</label>
					<input type='text' name='pais' value=<?= $fila['pais'] ?>>
				</div>
				<div>
					<input type='submit' value='GUARDAR' name='enviar' class="guardar">
				</div>
				<div class="volver">
					<a href='cliente.php'>VOLVER</a>
				</div>
			</div>
		<?php
		}
		?>
	</form>

</body>

</html>