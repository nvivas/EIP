<!-- SUPERGLOBALS -->



<?php

// $GLOBALS --> Listado de todas las variables globales disponible
$saludo = "Hola mundo";

echo "<pre>";
print_r($GLOBALS);
echo "</pre>";
echo "<pre>";
print_r($_SERVER);
echo "</pre>";


function ambiolocal()
{
        // opcion 1
        global $saludo;
        echo $saludo;

        // opcion2

        echo $GLOBALS['saludo'];
}




?>