<?php

function esPrimo($num)
{
        // Inicializar variables
        $primo = false;
        $cont = 0;
        for ($i = 2; $i < $num; $i++) {
                // si hay algún número que sea divisible, no es primo
                if ($num % $i == 0) {
                        $cont++;
                        break;
                }
        }
        if (!is_int($num)) {
                echo "$num No es un número entero";
                echo "<br>";
        } else if ($cont == 0) {
                $primo = true;
                echo "$num: Es primo";
                echo "<br>";
        } else {
                echo "$num: No es primo";
                echo "<br>";
        }
        return $primo;
}

// Llamada a la función
echo "<h1>Es Primo o No</h1>";
esPrimo(15);
esPrimo(3);
esPrimo(25);
esPrimo(5);
esPrimo(21);
esPrimo(7);
esPrimo(11);
esPrimo(13);
esPrimo(14);
esPrimo(14.2354);
esPrimo("hola");
echo "<br>";
echo "<a href='../index.php'>Volver</a>";
