<?php
require_once('./conexion.php');

$collection = $habitacion->nacho->habitacion;

$num_habitacion = $_POST['num_habitacion'];
$tipo_habitacion = $_POST['tipo_habitacion'];
$temporada = $_POST['temporada'];
$cuna = $_POST['cuna'];
$cliente_dni = $_POST['cliente_dni'];


// Actualizar un solo documento
$resultado = $database->habitacion->updateOne(
	["num_habitacion" => $numHab],
	["tipo_habitacion" => $tipo],
	["temporada" => $temporada],
	["cuna" => $cuna],
	["cliente_dni" => $dnicli]
);

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

</body>

</html>