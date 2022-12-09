<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lección 3, Pruebas</title>
</head>

<body>
    <?php
    $compra = array("Pan", "Huevos", "Leche", "Fruta");
    var_dump($compra) . "<br>";
    $compra = ["Pan", "Huevos", "Leche", "Fruta"];
    print_r($compra) . "<br>";


    for ($i = 0; $i < count($compra); $i++) {
        echo $compra[$i] . "<br>";
    }


    ?>

</body>

</html>