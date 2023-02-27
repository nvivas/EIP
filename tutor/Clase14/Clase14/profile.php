<?php

/* 
        1. Usuario entra por 1a vez --> FORM LOGIN
        2. FORM Login --> 
            Validaciones...
            Crearemos un SESSION y guardamos email --> SESSION
        3. SUS DATOS y FORM de LOGOUT
    */

session_start();

// LOGIN
if (isset($_POST['login'])) {
    $_SESSION['correo'] = $_POST['correo'];
}


// Ejecutar LOGOUT
if (isset($_POST['logout'])) {
    unset($_SESSION);
    session_destroy();
}
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


    <!-- Si no hemos guardado nada en SESSION  -->

    <?php
    if (!isset($_SESSION['correo'])) {
    ?>
        <h1> LOGIN </h1>
        <form action="" method="POST">
            <input type="email" name="correo">
            <input type="submit" value="Login" name="login">
        </form>
    <?php


        // hemos hecho login...
    } else {

    ?>
        <h1>Hola buenos días: <?= $_SESSION['correo'] ?></h1>
        <form action="" method="POST">
            <input type="submit" value="Logout" name="logout">
        </form>

    <?php

    }
    ?>


</body>

</html>