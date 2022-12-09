<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Opcional 1 números del 1 al 100</title>
        <link href="./css/style.css" rel="stylesheet">
</head>

<body>
        <table>
                <tr class="contenedor">
                        <?php

                        $letras = ['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H',];

                        echo "<td></td>";
                        for ($i = 0; $i < count($letras); $i++) {
                                echo "<td class='numeros'>$letras[$i]</td>";
                        }
                        for ($i = 0; $i < 8; $i++) {
                                $contador = $i + 1;

                                echo "<td class='numeros'>$contador</td>";

                                for ($j = 0; $j < 8; $j++) {
                                        if (($i % 2 == 0 && $j % 2 == 0) || ($i % 2 != 0 && $j % 2 != 0)) {
                                                $color = 'white';
                                        } else {
                                                $color = 'black';
                                        }
                                        echo "<td class='cuadro' style='background: $color'></td>";
                                }
                        }

                        ?>
                </tr>
        </table>
        <a href="../index.php">Volver</a>
</body>

</html>