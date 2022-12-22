<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Actividad 5</title>
        <link href="./css/style.css" rel="stylesheet">
</head>

<body>
        <h1>Calcular resultado</h1>
        <form action="" method="post">
                <div id="formulario">
                        <input type="text" name="num1" id="num1">

                        <select name="operador" id="operador">
                                <option value=""></option>
                                <option value="+">+</option>
                                <option value="-">-</option>
                                <option value="*">*</option>
                                <option value="/">/</option>
                                <option value="%">%</option>
                        </select>
                        <input type="text" name="num2" id="num2">
                </div>
                <div class="contenedor_boton">
                        <input type="submit" value="Enviar" name="enviar" class="boton">
                </div>
        </form>


        <?php
        ini_set('display_errors', '1');
        error_reporting(E_ALL);
        echo "<div id='solucion'>";
        echo calcular();
        echo "</div>";

        function calcular()
        {
                if (!empty($_POST['num1'])) {
                        $num1 = $_POST['num1'];
                }
                if (!empty($_POST['num2'])) {
                        $num2 = $_POST['num2'];
                }
                if (!empty($_POST['operador'])) {
                        $operacion = $_POST['operador'];
                }

                $isCorrecto = false;
                $resultado = "Hay que rellenar los datos";
                $mostrar = "Se debe introducir los parámetros";
                if (!empty($_POST['num1']) || !empty($_POST['num2']) || !empty($_POST['operador'])) {
                        switch ($operacion) {
                                case '+':
                                        $resultado = $num1 +  $num2;
                                        break;

                                case '-':
                                        $resultado = $num1 -  $num2;
                                        break;

                                case '*':
                                        $resultado = $num1 *  $num2;
                                        break;
                                case '/':
                                        if (!empty($num2)) {
                                                $resultado = $num1 /  $num2;
                                        } else {
                                                $resultado = "No se puede dividir por 0";
                                                $isCorrecto = true;
                                        }
                                        break;
                                case '%':
                                        if (!empty($num2)) {
                                                $resultado = $num1 %  $num2;
                                        } else {
                                                $resultado = "El módulo no se puede poner un 0";
                                                $isCorrecto = true;
                                        }
                                        break;
                                default:
                                        $isCorrecto = true;
                        }
                        $mostrar = $isCorrecto ? $resultado :  "$num1 $operacion  $num2 =  $resultado";
                }
                return $mostrar;
        }




        // }

        echo "<pre>";
        print_r($_POST);
        // print_r($GLOBALS);
        echo "</pre>";




        ?>
</body>

</html>



<?php






?>