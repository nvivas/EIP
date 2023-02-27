<?php

require_once('./conexion.php');

// consulta SQL
$res = "SELECT * FROM cliente;";

// se prepara HTML

?>
<!DOCTYPE html>
<html lang="en">

<head>
	<?php
	require_once('./head.php');
	?>
</head>

<body>
	<h2>Clientes</h2>
	<div class="crud">
		<a href='insertarClientes.php' class="insertar">Insertar Clientes</a>
		<a href='buscarClientes.php' class="buscar">Buscar Clientes</a>
	</div>

	<!-- cabecera tabla clientes -->
	<table>
		<th>Dni</th>
		<th>Nombre</th>
		<th>Apellidos</th>
		<th>Año de nacimiento</th>
		<th>Telefono</th>
		<th>Dirección</th>
		<th>Codigo Postal</th>
		<th>Poblacion</th>
		<th>Provincia</th>
		<th>Pais</th>
		<th colspan=2>Opciones</th>

		<?php
		$resultado = mysqli_query($conexion, $res);

		while ($fila = mysqli_fetch_array($resultado, MYSQLI_ASSOC)) {

		?>
			<tr>
				<td><?= $fila['dni'] ?></td>
				<td><?= $fila['nombre'] ?></td>
				<td><?= $fila['apellidos'] ?></td>
				<td><?= $fila['anyo_nacimiento'] ?></td>
				<td><?= $fila['telefono'] ?></td>
				<td><?= $fila['direccion'] ?></td>
				<td><?= $fila['codigo_postal'] ?></td>
				<td><?= $fila['poblacion'] ?></td>
				<td><?= $fila['provincia'] ?></td>
				<td><?= $fila['pais'] ?></td>
				<td><a href='borrar.php?dni=<?= $fila['dni'] ?>'>Borrar</a></td>
				<td><a href='actualizarClientes.php?dni=<?= $fila['dni'] ?>'> Modificar</a></td>
			</tr>
		<?php
		}
		?>
	</table>
	<a href='index.php' class="volver">VOLVER</a>
</body>

</html>
<?php
mysqli_free_result($resultado);
?>