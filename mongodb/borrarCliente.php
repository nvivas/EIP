<?php
require_once('./conexion.php');

$collection = $cliente->nacho->cliente;

$dni = $_GET['dni'];

// Eliminar un solo documento
$resultado = $database->cliente->deleteOne(["dni" => $dni]);

echo "Documento eliminado: " . $resultado->getDeletedCount() . "\n";

?>

<!DOCTYPE html>
<html lang="es">

<head>
	<?php require_once('./head.php'); ?>
</head>

<body>
	<div class="volver">
		<a href='cliente.php'>VOLVER</a>
	</div>
</body>

</html>