<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Opcional</title>
        <link href="./css/style.css" rel="stylesheet">
        <meta name="author" content="Ignacio Vivas Martín" />
        <meta name="description" content="Lorem, ipsum dolor sit amet consectetur adipisicing elit.">
</head>

<body>
        <h1>Dar medidas a formas</h1>
        <form action="" method="post">
                <div id="formulario">
                        <div class="celda">
                                <label for="ancho" class="etiqueta">Ancho</label>
                                <input type="text" name="ancho">
                        </div>

                        <div class="celda">
                                <label for="alto" class="etiqueta">Alto</label>
                                <input type="text" name="alto">
                        </div>

                        <div class="celda">
                                <label for="fondo" class="etiqueta">Elije un color</label>
                                <input type="color" name="fondo">
                        </div>
                        <div class="celda">
                                <label for="eleccion" class="etiqueta">Elije una forma</label>
                                <select name="eleccion">
                                        <option value="rect">Rectangulo</option>
                                        <option value="circ">Cilculo</option>
                                </select>
                        </div>
                        <div class="celda">
                                <input type="submit" value="Enviar" name="enviar" class="boton">
                        </div>
        </form>

        <?php

        ini_set('display_errors', '1');
        error_reporting(E_ALL);

        $mostrar = " <div class='celda'>Se debe introducir los parámetros</div>";
        $mostrar = " <div class='celda' style='width: 100px; height: 100px; background: red;'></div> ";

        if (!empty($_POST['ancho'])) {
                $ancho = $_POST['ancho'];
                $radio = $ancho / 2;
        }
        if (!empty($_POST['alto'])) {
                $alto = $_POST['alto'];
        }
        if (!empty($_POST['fondo'])) {
                $fondo = $_POST['fondo'];
        }
        if (!empty($_POST['eleccion'])) {
                $eleccion = $_POST['eleccion'];
        }


        if (!empty($_POST['ancho']) || !empty($_POST['alto'])) {

                if ($eleccion == "circ") {
                        $mostrar = " <div class='celda' style='width: $ancho\px; height: $ancho\px; background: $fondo; border-radius: $radio\px'></div> ";
                        if ($ancho != $alto) {
                                echo " <div class='celda' style='font-size: 20px; color: red;'>Se ajusta a la medida del ancho</div>";
                        }
                } else if ($eleccion == "rect") {
                        $mostrar = " <div class='celda' style='width: $ancho\px; height: $alto\px; background: $fondo;'></div> ";
                }
        }

        echo $mostrar;

        echo "<pre>";
        print_r($_POST);
        echo "</pre>";

        ?>
</body>

</html>