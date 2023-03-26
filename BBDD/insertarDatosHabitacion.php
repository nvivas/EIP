<?php

require_once('./conexion.php');

$numHab = $_POST['num_habitacion'];
$tipo = $_POST['tipo_habitacion'];
$temporada = $_POST['temporada'];
$cuna = $_POST['cuna'];
$dnicli = $_POST['cliente_dni'];

// Creamos la sentencia sql
$inser = "INSERT INTO habitacion(num_habitacion, tipo_habitacion, temporada, cuna, cliente_dni, estado) 
VALUES ($numHab, '$tipo', '$temporada', '$cuna', '$dnicli', 'Ocupado')";

$com = "commit";

// Ejecutar la sentencia
$resultado = mysqli_query($conexion, $inser);

// SIEMPRE ME DA 1064
echo mysqli_errno($conexion);

if (mysqli_errno($conexion) == 1062) {
?>
	<h2>Clave primaria duplicada</h2>
	<div class="volver">
		<a href='index.php'>VOLVER</a>
	</div>
<?php

	// Para saber el código de error y poder tratarlo	  

} else if (mysqli_errno($conexion) == 1054) {

?>
	<h2>El cliente <?= $dnicli ?> no figura como cliente. La habitacion no se ha insertado</h2>
	<div class="volver">
		<a href='habitacion.php'>VOLVER</a>
	</div>
<?php
} else if (mysqli_errno($conexion) != 0) {
	// esto me saca el código
	echo mysqli_errno($conexion);

	// esto me saca el texto 
	$error = mysqli_error($conexion);
	echo $error;
} else {
?>
	<!DOCTYPE html>
	<html lang="es">

	<head>
		<?php require_once('./head.php') ?>
	</head>

	<body>
		<h2>Se ha insertado correctamente</h2>
		<?php
		$error = mysqli_error($conexion);
		echo $error;
		?>
		<div class="volver">
			<a href='habitacion.php'>VOLVER</a>
		</div>
	<?php } ?>


	</body>

	</html>
	<?php
	mysqli_query($conexion, $com);
	mysqli_close($conexion);
	?>