<?php

function saludo($nombre)
{
    echo "Hola $nombre! :) ";
}

saludo("Nacho");

$precio = 500;

function descuento($base ) {
    $resultado = $base -$base*20/100;

    return $resultado;
}

$descuento = descuento($precio);

echo $descuento;
