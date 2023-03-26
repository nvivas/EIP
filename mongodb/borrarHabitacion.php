<?php
require_once('./conexion.php');

$num_habitacion = $_GET['num_habitacion'];

// consulta SQL
$borrar = "DELETE FROM habitacion WHERE num_habitacion='$num_habitacion'";
$com = "commit;";

// Ejecutar la sentencia
$resultado = mysqli_query($conexion, $borrar);
?>

<!DOCTYPE html>
<html lang="es">

<head>
	<?php require_once('./head.php'); ?>
</head>

<body>
	<?php

	if (mysqli_errno($conexion) == 1062) {
	?>
		<h2>Clave primaria duplicada</h2>
		<div class="volver">
			<a href='habitacion.php'>VOLVER</a>
		</div>
	<?php

	} else if (mysqli_errno($conexion) == 1451) {
	?>
		<h2>No se puede borrar la habitacion <?= $num_habitacion ?></h2>
		<div class="volver">
			<a href='index.php'>VOLVER</a>
		</div>
	<?php
	} else {
	?>
		<h2>Se ha eliminado <?= $num_habitacion ?></h2>

		<?php

		$error = mysqli_error($conexion);
		echo $error;
		?>
		<div class="volver">
			<a href='habitacion.php'>VOLVER</a>
		</div>
	<?php
		$resultado = mysqli_query($conexion, $com);
	}
	?>
</body>

</html>