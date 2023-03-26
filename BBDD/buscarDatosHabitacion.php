<?php
require_once('./conexion.php');

$_REQUEST['num_habitacion'] <> "" ?	$numHab = "%" . $_REQUEST['num_habitacion'] . "%" : $numHab = "%";
$_REQUEST['tipo_habitacion'] <> "" ?	$tipo = "%" . $_REQUEST['tipo_habitacion'] . "%" : $tipo = "%";
$_REQUEST['temporada'] <> "" ?	$temporada = "%" . $_REQUEST['temporada'] . "%" : $temporada = "%";
$_REQUEST['cuna'] <> "" ?	$cuna = "%" . $_REQUEST['cuna'] . "%" : $cuna = "%";
$_REQUEST['cliente_dni'] <> "" ?	$dnicli = "%" . $_REQUEST['cliente_dni'] . "%" : $dnicli = "%";


// Creamos la sentencia sql
$inser = "SELECT * FROM habitacion WHERE num_habitacion LIKE '$numHab' AND  tipo_habitacion LIKE '$tipo' AND  temporada LIKE '$temporada' AND  cliente_dni LIKE '$dnicli' AND  cuna LIKE '$cuna'";
// Ejecutar la sentencia
$resultado = mysqli_query($conexion, $inser);

if (mysqli_errno($conexion) == 1062) {
?>
	<h2>Clave primaria duplicada</h2>
	<div class="volver">
		<a href='index.php'>VOLVER</a>
	</div>
<?php
	// Para saber el código de error y poder tratarlo	  
} else if (mysqli_errno($conexion) != 0) {
	// esto me saca el código
	echo mysqli_errno($conexion);

	// esto me saca el texto 
	$error = mysqli_error($conexion);
	echo $error;
?>
	<div class="volver">
		<a href='buscarClientes.php'>VOLVER</a>
	</div>
<?php
} else {
?>
	<!DOCTYPE html>
	<html lang="es">

	<head>
		<?php require_once('./head.php') ?>
	</head>

	<body>
		<h2>Resultado de la busqueda</h2>
		<?= require_once('./tablaHabitacionInicial.php') ?>
		<div class="volver">
			<a href='habitacion.php'>VOLVER</a>
		</div>
	</body>

	</html>
<?php
	mysqli_free_result($resultado);
	mysqli_close($conexion);
}
?>