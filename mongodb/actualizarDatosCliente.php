<?php
require_once('./conexion.php');

$collection = $cliente->nacho->cliente;

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

// Actualizar un solo documento
$resultado = $database->cliente->updateOne(
	["dni" => $dni],
	["nombre" => $nombre],
	["apellidos" => $apellidos],
	["fecha" => $fecha],
	["telefono" => $telefono],
	["direccion" => $direccion],
	["codigo_postal" => $codigo_postal],
	["poblacion" => $poblacion],
	["provincia" => $provincia],
	["pais" => $pais]
);

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