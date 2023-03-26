<?php

require_once('./conexion.php');

$dni = $_REQUEST['dni'];
$nombre = $_REQUEST['nombre'];
$apellidos = $_REQUEST['apellidos'];
$fecha = $_REQUEST['anyo_nacimiento'];
$telefono = $_REQUEST['telefono'];
$direccion = $_REQUEST['direccion'];
$codigo_postal = $_REQUEST['codigo_postal'];
$poblacion = $_REQUEST['poblacion'];
$provincia = $_REQUEST['provincia'];
$pais = $_REQUEST['pais'];

// Creamos la sentencia sql
$inser = "INSERT INTO cliente(dni, nombre, apellidos, anyo_nacimiento, telefono, direccion, codigo_postal, poblacion, provincia, pais) 
VALUES ('$dni', '$nombre', '$apellidos', $fecha, '$telefono', '$direccion','$codigo_postal', '$poblacion', '$provincia', '$pais')";

$com = "commit";

// Ejecutar la sentencia
$resultado = mysqli_query($conexion, $inser);

?>

<!DOCTYPE html>
<html lang="es">

<head>
	<?php require_once('./head.php') ?>
</head>

<body>
	<?php
	if (mysqli_errno($conexion) == 1062) {
	?>
		<h2>Clave primaria duplicada</h2>
		<div class="volver">
			<a href='cliente.php'>VOLVER</a>
		</div>
	<?php
		// Para saber el código de error y poder tratarlo
	} else if (mysqli_errno($conexion) == 1064) {
	?>
		<h2>Campos vacios</h2>
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
	} else {
		echo "<h2>Se ha insertado correctamente</h2>";
		$error = mysqli_error($conexion);
		echo $error;
	?>
		<div class="volver">
			<a href='cliente.php'>VOLVER</a>
		</div>
	<?php 	} ?>
</body>

</html>
<?php
mysqli_query($conexion, $com);
mysqli_close($conexion);
?>

</body>

</html>