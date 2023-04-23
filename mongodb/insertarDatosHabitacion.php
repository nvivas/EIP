<?php

require_once('./conexion.php');

$collection = $habitacion->nacho->habitacion;

$numHab = $_POST['num_habitacion'];
$tipo = $_POST['tipo_habitacion'];
$temporada = $_POST['temporada'];
$cuna = $_POST['cuna'];
$dnicli = $_POST['cliente_dni'];

// Insertar un solo documento
$resultado = $database->habitacion->insertOne([
	"num_habitacion" => $numHab,
	"tipo_habitacion" => $tipo,
	"temporada" => $temporada,
	"cuna" => $cuna,
	"cliente_dni" => $dnicli
]);

?>
<!DOCTYPE html>
<html lang="es">

<head>
	<?php require_once('./head.php') ?>
</head>

<body>
	<h2>Se ha insertado correctamente</h2>
	<div class="volver">
		<a href='habitacion.php'>VOLVER</a>
	</div>
</body>

</html>