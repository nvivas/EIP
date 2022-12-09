<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Opcional 2 tablas de multiplicar</title>
        <link href="./css/style.css" rel="stylesheet">
</head>

<body>

        <div id='contenedor'>
                <?php
                for ($i = 1; $i <= 10; $i++) {
                        echo "<div class='item'>";
                        echo "<h2>Tabla del $i</h2>";
                        for ($j = 0; $j < 11; $j++) {
                                $resultado = $j * $i;
                                echo "$i x $j = $resultado";
                                echo "<br>";
                        }
                        echo "</div>";
                }
                ?>
        </div>
        <a href="../index.php">Volver</a>
</body>

</html>