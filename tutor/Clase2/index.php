<?php
    // Código PHP
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

    <?php 
        echo __DIR__; // Directorio en el que está el archivo

       require_once(__DIR__."/modules/nav.php");
    ?>


    <?php
        echo $page; 

    ?>

    <nav>
        NAVEGADOR
        <a href="index.php"> HOME </a>
        <a href="servicios.php"> SERVICIOS </a>
        <a href="contacto.php"> CONTACTO </a>        
    </nav>

    <main>  
        <h1> HOLA MUNDO!! </h1>
        <p> Lorem ipsum dolor sit, amet consectetur adipisicing elit. Fugit dicta vel ipsa repellat dolore adipisci officiis ipsam architecto optio cumque, sequi in laboriosam tenetur quia eos iure quam animi possimus.
        Dicta, quas. Ratione, recusandae laudantium laboriosam vel dolores aliquid sequi necessitatibus quidem! Dolor incidunt voluptate architecto vel, praesentium rem voluptates vitae doloribus quas minima nisi recusandae ea necessitatibus doloremque! Cupiditate?
        Aut placeat corporis odit illo quae suscipit libero rem doloribus officiis a nemo soluta aliquam enim cum nulla, ratione saepe nam cupiditate magnam? Provident iure repellat corrupti maiores, esse magnam.
        Corporis repudiandae dolorem modi possimus! Necessitatibus, ut. Dolor expedita, porro sapiente quam sint quo voluptate vero iure in quos ea repellat quod voluptates aliquam repudiandae quia, similique officiis ducimus adipisci?</p>

    </main>

    <footer>
        FOOTER DE LA PÁGINA!

    </footer>






</body>
</html>