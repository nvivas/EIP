<?php
require_once('./conexion.php');
?>
<!DOCTYPE html>
<html lang="es">

<head>
	<?php require_once('./head.php'); ?>
</head>

<body>
	<h2>Nuevo Cliente</h2> </br>
	<form method='post' action='insertarDatosCliente.php' name='formulario1' onSubmit='return Valida(this);'>
		<?php require_once('./tablaClienteInsertar.php'); ?>

		<div>
			<input type='submit' value='GUARDAR' name='enviar' class="guardar">
		</div>
		<div class="volver">
			<a href='cliente.php'>VOLVER</a>
		</div>
	</form>

</body>

</html>