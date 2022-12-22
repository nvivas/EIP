<?php
ini_set('display_errors', '1');
error_reporting(E_ALL);

// GLOBAL
$saludo = "HOLA MUNDO :)";
$nombre = "Mario";

require_once("modulo.php");


echo "<pre>";
print_r($_GET);
echo "</pre>";
echo "<pre>";
print_r($_POST);
echo "</pre>";

function ambitolocal()
{

    // opción 1
    global $saludo;
    echo $saludo;

    // opción 2
    echo $GLOBALS['nombre'];

    $result = "hola";
}

$color = "";

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

    <form action="" method="POST">
        <input type="text" name="nombre" placeholder="Introduce tu nombre"><br>
        <input type="email" name="correo" placeholder="Introduce tu correo"><br>

        <textarea name="descripcion" id="" cols="30" rows="10" placeholder="TU consulta"></textarea><br>
        <input type="submit" value="Enviar">
    </form>


    <?php

    // Sacar un mensaje si el usuario ha metido el nombre el correo y el textarea
    //echo isset($_POST['nombre']); // --> 1

    echo empty($_POST['nombre']); // --> 1

    if (
        isset($_POST['nombre']) &&
        isset($_POST['correo']) &&
        isset($_POST['descripcion']) &&
        !empty($_POST['nombre']) &&
        !empty($_POST['correo']) &&
        !empty($_POST['descripcion'])
    ) {

        echo "Hola, bienvenido " . $_POST['nombre'] . " :)";
        echo "<br>";
        echo "<h2>Tu mensaje es:</h2>";
        echo "<p>" . $_POST['descripcion'] . "</p>";
    }


    ?>

</body>

</html>