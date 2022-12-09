<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Actividad 1 de las clases de php" />
    <meta name="author" content="Ignacio Vivas Martín" />
    <title>Actividad 1</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <h1>Actividad 1</h1>
    <?php

    $nombre = "Nacho";
    const ESCUELA = "EIP";
    $apellidos = "Vivas Martín";
    $edad = 18;
    $intereses = "Leer, la música y bailar";

    echo "<h2>Alumno de <span>" . ESCUELA . "</span></h2>";
    echo "<p>Nombre completo: <span><b>$nombre </b> $apellidos </span>";
    echo "<p>Tiene $edad años</p>";
    echo "<p>Sus hobbies son: $intereses</p>";

    ?>
    <a href="../index.php">Volver al menú principal</a>
</body>

</html>