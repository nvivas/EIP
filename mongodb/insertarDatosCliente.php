<?php

require_once('./conexion.php');

$collection = $cliente->nacho->cliente;

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

// Insertar un solo documento
$resultado = $database->cliente->insertOne([
	"dni" => $dni,
	"nombre" => $nombre,
	"apellidos" => $apellidos,
	"fecha" => $fecha,
	"telefono" => $telefono,
	"direccion" => $direccion,
	"codigo_postal" => $codigo_postal,
	"poblacion" => $poblacion,
	"provincia" => $provincia,
	"pais" => $pais
]);

?>

<!DOCTYPE html>
<html lang="es">

<head>
	<?php require_once('./head.php') ?>
</head>

<body>
	<div class="volver">
		<a href='cliente.php'>VOLVER</a>
	</div>
</body>

</html>


</body>

</html>