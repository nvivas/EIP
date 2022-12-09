<?php

$num1 = 0;
$num2 = 1;
$num = 13;
echo "<h1>Serie Fibonacci</h1>";
// 1 1 2 3 5 8 13 21 34 55 89 144 233
for ($i = 0; $i < $num; $i++) {
        if ($i == 0) {
                echo "$num2, ";
        } else {
                $resultado = $num1 + $num2;
                $cadena = ($i + 1) == $num ? "" : ", ";
                echo "$resultado$cadena";
                $num1 = $num2;
                $num2 = $resultado;
        }
}

echo "<br>";
echo "<a href='../index.php'>Volver</a>";
