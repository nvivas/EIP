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

                <?php
                echo "<tr>";
                for ($i = 1; $i <= 100; $i++) {
                        echo "<td class='cuadro'>$i</td>";
                        if ($i % 10 == 0 && $i != 100) {
                                echo "</tr>";
                                echo "<tr>";
                        }
                }
                echo "</tr>";
                ?>
        </table>

        <a href="../index.php">Volver</a>
</body>

</html>