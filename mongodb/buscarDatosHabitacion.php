<?php
require_once('./conexion.php');

$collection = $habitacion->nacho->habitacion;

$_REQUEST['num_habitacion'] <> "" ?	$numHab = "%" . $_REQUEST['num_habitacion'] . "%" : $numHab = "%";
$_REQUEST['tipo_habitacion'] <> "" ?	$tipo = "%" . $_REQUEST['tipo_habitacion'] . "%" : $tipo = "%";
$_REQUEST['temporada'] <> "" ?	$temporada = "%" . $_REQUEST['temporada'] . "%" : $temporada = "%";
$_REQUEST['cuna'] <> "" ?	$cuna = "%" . $_REQUEST['cuna'] . "%" : $cuna = "%";
$_REQUEST['cliente_dni'] <> "" ?	$dnicli = "%" . $_REQUEST['cliente_dni'] . "%" : $dnicli = "%";


$filtro = [
	"num_habitacion" => $numHab,
	"tipo_habitacion" => $tipo,
	"temporada" => $temporada,
	"cuna" => $cuna,
	"cliente_dni" => $dnicli
];

$resultado = $collection->find($filtro);

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