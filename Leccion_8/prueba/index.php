<?php

// Envío de Archivos con PHP a través de form


if (isset($_POST['nombre'])) {
        echo "<pre>";
        print_r($_POST);

        print_r($_FILES);
        echo "</pre>";

        // Crear carpeta uploads/ si no existe...

        if (!file_exists("uploads")) {
                // Crear uploads
                mkdir("uploads");
        }

        if ($_FILES['imagen']['type'] == "image/jpeg") {
                // Guardo la imagen

                $folder = "";
                if (isset($_POST['nombre'])) {
                        mkdir("uploads/" . $_POST['nombre']); // uploads/pepe
                        $folder = $_POST['nombre'] . "/";
                }



                // Origen
                $from = $_FILES['imagen']['tmp_name'];
                // destino
                $to = "uploads/" . $folder . $_FILES['imagen']['name'];

                move_uploaded_file($from, $to); // 1


        }
}

$nombre = "Jose Antonio";

echo stristr($nombre, "an");


?>


<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
</head>

<body>


        <form action="" method="POST" enctype="multipart/form-data">
                <input type="text" name="nombre">
                <label for="imagen" class="col-sm-2 col-form-label">Foto</label>
                <input type="file" name="imagen">
                </div>
                <input type="submit" value="Enviar">
        </form>

</body>

</html>