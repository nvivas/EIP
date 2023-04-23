<?php
require_once('./conexion.php');

$collection = $cliente->nacho->cliente;
?>

<!DOCTYPE html>
<html lang="es">

<head>
	<?php require_once('./head.php'); ?>
</head>

<body>
	<h2>Buscar Cliente</h2>
	<form method='post' action='buscarDatosCliente.php' name='formulario1' onSubmit='return Valida(this);'>
		<?php require_once('./tablaClienteInsertar.php'); ?>

		<div>
			<input type='submit' value='BUSCAR' name='enviar' class="guardar">
		</div>
		<div class="volver">
			<a href='cliente.php'>VOLVER</a>
		</div>
	</form>
</body>

</html>