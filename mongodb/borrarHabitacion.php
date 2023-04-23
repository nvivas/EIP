<?php
require_once('./conexion.php');

$collection = $habitacion->nacho->habitacion;

$num_habitacion = $_GET['num_habitacion'];

// Eliminar un solo documento
$resultado = $database->cliente->deleteOne(["num_habitacion" => $num_habitacion]);

echo "Documento eliminado: " . $resultado->getDeletedCount() . "\n";

?>

<!DOCTYPE html>
<html lang="es">

<head>
	<?php require_once('./head.php'); ?>
</head>

<body>
	<h2>Se ha eliminado <?= $num_habitacion ?></h2>
	<div class="volver">
		<a href='habitacion.php'>VOLVER</a>
	</div>
</body>

</html>