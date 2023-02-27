<?php
require_once('./conexion.php');

// consulta SQL
$res = "SELECT * FROM habitacion";

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
	<table>
		<th>Número de habitacion</th>
		<th>Tipo de Habitacion</th>
		<th>Temporada</th>
		<th>Cuna</th>
		<th>Dni del Cliente</th>
		<th colspan=2>Opciones</th>";
		<?php
		$resultado = mysqli_query($conexion, $res);

		while ($fila = mysqli_fetch_array($resultado, MYSQLI_ASSOC)) {

		?>
			<tr>
				<td><?= $fila['num_habitacion'] ?></td>
				<td><?= $fila['tipo_habitacion'] ?></td>
				<td><?= $fila['temporada'] ?></td>
				<td><?= $fila['cuna'] ?></td>
				<td><?= $fila['cliente_dni'] ?></td>
				<td><a href='borrarHabitacion.php?num_habitacion=<?= $fila['num_habitacion'] ?>'> Borrar</a></td>
				<td><a href='actualizarHabitaciones.php?num_habitacion=<?= $fila['num_habitacion'] ?>'>Modificar</a></td>
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