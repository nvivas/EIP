<!DOCTYPE html>
<html lang="en">

<head>
        <?php
        require_once('./head.php');
        ?>
</head>

<body>
        <div class="contenedor">
                <div id="cliente">
                        <label for="cliente">CLIENTES</label>
                        <img src="./imagenes/cliente.jpg" width="300px" onclick="window.open('cliente.php','_parent')" style="cursor:hand">
                </div>
                <div id="habitacion">
                        <label for="habitacion">HABITACIÓN</label>
                        <img src="./imagenes/habitacion.png" width="300px" onclick="window.open('habitacion.php','_parent')" style="cursor:hand">
                </div>
        </div>

</body>

</html>