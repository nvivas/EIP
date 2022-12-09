<?php

ini_set('display_errors', '1');
error_reporting(E_ALL);

echo "<h1>Actividad Obligatoria pruebas</h1>";
echo "<h2>Número Maximo</h2>";
echo "<div id='contenedor'>";
echo numMaximo(1, 2, 3);
echo "<br>";
echo numMaximo('hola', 'buenas', 'adios');
echo "<br>";
echo numMaximo(4, 1, 100);
echo "<br>";
echo numMaximo(4000, 200, 100);
echo "<br>";
echo "<h2>Mayor de edad</h2>";
echo  mayorEdad("Nacho", 17);
echo "<br>";
echo mayorEdad("Nacho", 18);
echo "<br>";
echo mayorEdad("Nacho", 19);
echo "<h2>Par o Impar</h2>";
echo esPar(10);
echo "<br>";
echo esPar(11);
echo "<br>";
echo esPar(0);
echo "<br>";
echo esPar("hola");
echo "<br>";
echo "<h2>Factorial</h2>";
echo factorial(5);
echo "<br>";
echo factorial(6);
echo "<br>";
echo factorial(0);
echo "<br>";
echo factorial(-10);
echo "<br>";
echo factorial("hola");
echo "<br>";
$numeros = [1, 3, 4, 12, 7, 34, 22, 45, 2, 4, 84, 35, 21, 55, 76, 29, 83, 22, 33];

echo "<h2>Numero Máximo Array</h2>";
echo numeroMaximo($numeros);
echo "</div>";


function mayorEdad($nombre, $edad)
{
    if (!is_string($nombre) || !is_int($edad)) {
        return "Algún parámetro no es correcto";
    } else if ($edad > 18) {
        return "$nombre tiene $edad años y es mayor de edad";
    } else {
        return "$nombre tiene $edad años y es menor de edad";
    }
}

function esPar($numero)
{
    if (!is_int($numero)) {
        return "\"$numero\" no es un número";
    } else if ($numero % 2 == 0) {
        return "El número $numero es PAR";
    } else {
        return "El número $numero es IMPAR";
    }
}

function numMaximo($num1, $num2, $num3)
{
    if (!is_int($num1) || !is_int($num2) || !is_int($num3)) {
        return "Algún número no es entero";
    }
    $numAux = 0;
    $numeros = [$num1, $num2, $num3];

    for ($i = 0; $i < count($numeros); $i++) {
        if ($numeros[$i] > $numAux) {
            $numAux = $numeros[$i];
        }
    }

    // if ($num1 > $numAux) {
    //     $numAux = $num1;
    // }

    // if ($num2 > $numAux) {
    //     $numAux = $num2;
    // }

    // if ($num3 > $numAux) {
    //     $numAux = $num3;
    // }

    return "El número máximo es $numAux";
}

function factorial($numero)
{
    if (!is_int($numero)) {
        return "No se puede hacer el factorial de \"$numero\" al no ser un número";
    }
    $resultado = 1;
    $cadena = "";
    for ($i = 1; $i <= $numero; $i++) {
        $resultado *= $i;
        if ($i != $numero) {
            $cadena .= "$i x ";
        } else {
            $cadena .= "$i";
        }
    }

    if ($numero == 0) {
        return "El factorial de 0 es igual a 1";
    } else if ($numero < 0) {
        return "El factorial de un número negativo NO EXISTE";
    } else {
        return "El Factiorial de $numero = $cadena = $resultado";
    }
}

function numeroMaximo($numeros)
{
    $numAux = 0;
    for ($i = 0; $i < count($numeros); $i++) {
        if ($numeros[$i] > $numAux) {
            $numAux = $numeros[$i];
        }
    }

    return "El número máximo es $numAux";
}

echo "<br>";
echo "<a href='../index.php'>Volver</a>";

// el cierre de php me lo quita al guardar el visual studio