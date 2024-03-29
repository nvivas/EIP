<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menú de inicio</title>

    <link href="styles/styles.css" rel="stylesheet">
</head>

<body>
    <?php
    $titulo = "Enlaces a las actividades de PHP";
    echo "<h1>$titulo </h1>";
    ?>

    <table>
        <tr>
            <th>Teoría</th>
            <th>Actividades</th>
            <th>Pruebas</th>
        </tr>
        <tr>
            <td></td>
            <td><a href='./Leccion_1/actividad_1.php'> Actividad 1 </a></td>
            <td></td>
        </tr>
        <tr>
            <td><a href='./Leccion_2/teoria_2.php'> Teoria 2 </a></td>
            <td><a href='./Leccion_2/actividad_2/index.php'> Actividad 2 </a></td>
            <td><a href='./tutor'> Clase tutor </a></td>
        </tr>
        <tr>
            <td><a href='./Leccion_3/teoria_3.php'> Teoria 3 </a></td>
            <td><a href='./Leccion_3/actividad_3/index.php'>Actividad 3</a>
                <a href='./Leccion_3/actividad_3/index_p2.php'>Actividad 3.1
                </a>
            </td>
            <td><a href='./Leccion_3/tutor_3.php'> Clase Tutor 3 </a></td>
        </tr>
        <tr>
            <td><a href='./Leccion_4/teoria_4.php' style="display: none"> Teoria 4 </a></td>
            <td><a href='./Leccion_4/actividad_4/index.php'>Actividad 4</a></td>
            <td><a href='./Leccion_4/tutor_4.php'> Clase Tutor 4 </a></td>
        </tr>
        <tr>
            <td></td>
            <td><a href='./Leccion_5/actividad_5/index.php'>Actividad 5</a>
                <a href='./Leccion_5/opcional_5/index.php'>Opcional</a>
            </td>
            <td></td>
        </tr>
        <tr>
            <td><a href='./Leccion_6/teoria_6.php'> Teoria 6 </a></td>
            <td><a href='./Leccion_6/actividad_6/index.php'>Actividad 6</a>
            </td>
            <td></td>
        </tr>
        <tr>
            <td><a href='./Leccion_7/teoria_7.php'> Teoria 7 </a></td>
            <td><a href='./Leccion_7/actividad_7/index.php'>Actividad 7</a></td>
            <td></td>
        </tr>
        <tr>
            <td><a href='./Leccion_8/teoria_8/index.php'> Teoria 8 </a></td>
            <td><a href='./Leccion_8/actividad_8/index.php'>Actividad 8</a></td>
            <td><a href='./Leccion_8/prueba/index.php'>Prueba 8</a></td>
        </tr>
        <tr>
            <td></td>
            <td><a href='./Leccion_12/actividad_12/index.php'>Actividad 12</a></td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td><a href='./MongoDB/index.php'>MongoDB</a></td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td><a href='./Desarrollo_aplicaciones_Seguras/Leccion_1/owaps-vulnerabilidades.php'>OWAPS</a></td>
            <td></td>
        </tr>

    </table>
</body>

</html>