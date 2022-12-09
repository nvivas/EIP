<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teoria 2</title>
</head>

<body>
    <?php
    // para hacer plantillas más o menos
    // Si hay fallo, FATAL ERROR!
    require("../modules/nav.php");
    // garantiza que solo sale una vez
    require_once("../modules/nav.php");

    // Saca warning pero nos deja seguir
    include("../modules/nav.php");
    include_once("../modules/nav.php");


    ?>

    <main>
        <h1>Hola mundo </h1>
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Minima ducimus quo veritatis illum eos sit nam quasi quaerat quis tempora, doloribus maiores. Unde recusandae, aspernatur labore reprehenderit voluptates rem corrupti?</p>
    </main>

    <footer>
        <address>
            <p>Ignacio Vivas Martín &copy;</p>
        </address>
    </footer>




</body>

</html>