<?php
require_once('./conexion.php');

$dni = $_POST['dni'];
$nombre = $_POST['nombre'];
$apellidos = $_POST['apellidos'];
$anyo_nacimiento = $_POST['anyo_nacimiento'];
$telefono = $_POST['telefono'];
$direccion = $_POST['direccion'];
$codigo_postal = $_POST['codigo_postal'];
$poblacion = $_POST['poblacion'];
$provincia = $_POST['provincia'];
$pais = $_POST['pais'];

// Creamos la sentencia sql
$inser = "UPDATE cliente SET nombre='" . $nombre . "',
							 apellidos='" . $apellidos . "',
							 anyo_nacimiento='" . $anyo_nacimiento . "',
							 telefono='" . $telefono . "',
							 direccion='" . $direccion . "',
							 codigo_postal='" . $codigo_postal . "',
							 poblacion='" . $poblacion . "',
							 provincia='" . $provincia . "',
							 pais='" . $pais . "'
							 WHERE dni='" . $dni . "'";

$com = "commit";

// Ejecutar la sentencia
$resultado = mysqli_query($conexion, $inser);

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
} else {
?>
	<!DOCTYPE html>
	<html lang="en">

	<head>
		<?php require_once('./head.php'); ?>

	</head>

	<body>
		<h2>El cliente se ha actualizado correctamente</h2>

		<div class="volver">
			<a href='cliente.php'>VOLVER</a>
		</div>
	</body>

	</html>

<?php
	$error = mysqli_error($conexion);
	echo $error;
}

mysqli_query($conexion, $com);
mysqli_close($conexion);
?>