<?php
require_once('./conexion.php');

$dni = $_GET['dni'];

// consulta SQL
$borrar = "DELETE FROM cliente WHERE dni='$dni'";
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

	if (mysqli_errno($conexion) == 1451) {
	?>
		<h2>No se puede borrar el cliente porque tiene habitación asignada</h2>
		<div class="volver">
			<a href='cliente.php'>VOLVER</a>
		</div>
	<?php

	} else {
	?>
		<h2>Se ha eliminado <?= $dni ?></h2>

		<?php
		$error = mysqli_error($conexion);
		echo $error;
		?>
		<div class="volver">
			<a href='cliente.php'>VOLVER</a>
		</div>
	<?php
		$resultado = mysqli_query($conexion, $com);
	}
	?>
</body>

</html>