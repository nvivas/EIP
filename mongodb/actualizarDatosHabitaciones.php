<?php
require_once('./conexion.php');

$num_habitacion = $_POST['num_habitacion'];
$tipo_habitacion = $_POST['tipo_habitacion'];
$temporada = $_POST['temporada'];
$cuna = $_POST['cuna'];
$cliente_dni = $_POST['cliente_dni'];






// Creamos la sentencia sql
$inser = "UPDATE habitacion SET tipo_habitacion='" . $tipo_habitacion . "',
							    temporada='" . $temporada . "',
							    cuna='" . $cuna . "',
							    cliente_dni='" . $cliente_dni . "'
							    WHERE num_habitacion=" . $num_habitacion . "";

$com = "commit";


// Ejecutar la sentencia
$resultado = mysqli_query($conexion, $inser);

if (mysqli_errno($conexion) == 1062) {
?>
	<h2>Clave primaria duplicada</h2>
	<div class="volver">
		<a href='habitacion.php'>VOLVER</a>
	</div>
<?php

	// Para saber el código de error y poder tratarlo	  
} else if (mysqli_errno($conexion) != 0) {
	// esto me saca el código
	echo mysqli_errno($conexion);
	// esto me saca el texto 
	$error = mysqli_error($conexion);
	echo $error;
} else {

?>
	<!DOCTYPE html>
	<html lang="en">

	<head>
		<?php require_once('./head.php'); ?>

	</head>

	<body>
		<h2>La habitación se ha actualizado correctamente</h2>
		<div class="volver">
			<a href='habitacion.php'>VOLVER</a>
		</div>

	<?php
	$error = mysqli_error($conexion);
	echo $error;
}

mysqli_query($conexion, $com);
mysqli_close($conexion);
	?>