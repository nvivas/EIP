<?php
require_once('./conexion.php');

$collection = $cliente->nacho->cliente;

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



$filtro = [
	"dni" => $dni,
	"nombre" => $nombre,
	"apellidos" => $apellidos,
	"anyo_nacimiento" => $fecha,
	"telefono" => $telefono,
	"direccion" => $direccion,
	"codigo_postal" => $codigo_postal,
	"poblacion" => $poblacion,
	"provincia" => $provincia,
	"pais" => $pais
];

$resultado = $collection->find($filtro);

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