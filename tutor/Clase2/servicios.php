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
        $page = "a";


        require_once("modules/nav.php"); // Fatal Error!
        //require_once("modules/nav.php"); // Fatal Error!

        // include("modules/nav.php"); // Warning... y nos permite seguir
        // include_once("modules/nav.php"); // Warning... y nos permite seguir
    ?>




    <main>  
        <h1> SERVICIOS! </h1>
        

        <div class="card">
            <h1>Titulo</h1>
        </div>

    </main>

    <footer>
        FOOTER DE LA PÁGINA!

    </footer>






</body>
</html>