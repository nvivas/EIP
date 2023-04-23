<?php

require_once('./conexion.php');

$collection = $cliente->nacho->cliente;

$filtro = ["cliente" => "cliente"];
$resultado = $collection->find($filtro);

// se prepara HTML

?>
<!DOCTYPE html>
<html lang="en">

<head>
	<?php require_once('./head.php'); ?>
</head>

<body>
	<h2>Clientes</h2>
	<div class="crud">
		<a href='insertarClientes.php' class="insertar">Insertar Clientes</a>
		<a href='buscarClientes.php' class="buscar">Buscar Clientes</a>
	</div>

	<!-- cabecera tabla clientes -->
	<?php require_once('./tablaClientesInicial.php'); ?>
</body>

</html>