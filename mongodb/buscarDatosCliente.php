<?php
require_once('./conexion.php');

$_REQUEST['dni'] <> "" ?	$dni = "%" . $_REQUEST['dni'] . "%" : $dni = "%";
$_REQUEST['nombre'] <> "" ? $nombre = "%" . $_REQUEST['nombre'] . "%" : $nombre = "%";
$_REQUEST['apellidos'] <> "" ? $apellidos = "%" . $_REQUEST['apellidos'] . "%" : $apellidos = "%";
$_REQUEST['anyo_nacimiento'] <> "" ? $fecha = "%" . $_REQUEST['anyo_nacimiento'] . "%" : $fecha = "%";
$_REQUEST['telefono'] <> "" ? $telefono = "%" . $_REQUEST['telefono'] . "%" : $telefono = "%";
$_REQUEST['direccion'] <> "" ? $direccion = "%" . $_REQUEST['direccion'] . "%" : $direccion = "%";
$_REQUEST['codigo_postal'] <> "" ? $codigo_postal = "%" . $_REQUEST['codigo_postal'] . "%" : $codigo_postal = "%";
$_REQUEST['poblacion'] <> "" ? $poblacion = "%" . $_REQUEST['poblacion'] . "%" : $poblacion = "%";
$_REQUEST['provincia'] <> "" ? $provincia = "%" . $_REQUEST['provincia'] . "%" : $provincia = "%";
$_REQUEST['pais'] <> "" ? $pais = "%" . $_REQUEST['pais'] . "%" : $pais = "%";

// Creamos la sentencia sql
$res = "SELECT * FROM cliente WHERE dni LIKE '$dni' AND nombre LIKE '$nombre' AND apellidos LIKE '$apellidos' AND anyo_nacimiento LIKE '$fecha' AND telefono LIKE '$telefono' AND direccion LIKE '$direccion' AND codigo_postal LIKE '$codigo_postal' AND poblacion LIKE '$poblacion' AND provincia LIKE '$provincia' AND pais LIKE '$pais'";

// Ejecutar la sentencia
$resultado = mysqli_query($conexion, $res);

if (mysqli_errno($conexion) == 1062) {
?>
	<h2>Clave primaria duplicada</h2>
	<div class="volver">
		<a href='cliente.php'>VOLVER</a>
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
		<h2>Resultado de la búsqueda</h2>
		<?php require_once('./tablaClientesInicial.php'); ?>
	</body>

	</html>
<?php
	mysqli_free_result($resultado);
	mysqli_close($conexion);
}
?>