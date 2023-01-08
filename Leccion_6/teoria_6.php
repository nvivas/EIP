<?php
ini_set('display_errors', '1');
error_reporting(E_ALL);


print_r($_GET);
// Una variable está definida o existe.
if (isset($_GET['nombre'])) {
        echo "hola " . $_GET['nombre'];
}
echo "<br>";


$saludo = " hola mundo que tal";

echo strtolower($saludo);  // hola
echo "<br>";
echo ucwords($saludo);
echo "<br>";

echo str_repeat($saludo, 5);

echo "<br>";
echo str_replace("hola", "adiós", $saludo);

echo "<br>";

echo stristr($saludo, "Mundo");
echo "<br>";


$despedida = "Adiós a todos!";

echo substr($despedida, 0, 5);
echo mb_substr($despedida, 0, 5, "UTF-8");


$lista = "juan,pepe,pepa";

$nombres_array = explode(",", $lista);
echo "<pre>";
print_r($nombres_array);
echo "</pre>";

$string_final = implode("--", $nombres_array);
echo "<pre>";
print_r($string_final);
echo "</pre>";


$calle = "Calle Fernández de los Ríos número 41";


// texto.8@texto.es
echo "<br>";

echo preg_match("/^calle/i", $calle); // 1

echo "<br>";

$saludo = "hala";
echo preg_match("/^h[aeiou]+la/i", $saludo); // 1


echo "<br>";
echo "<br>";

$web = "https://www.google.es";

echo preg_match("/^https?:\/\/w{3}.[a-z]+.com$/i", $web); // 1


?>


<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
</head>

<body>



        <form action="" method="GET">
                <input type="text" name="nombre">
                <input type="submit" value="Enviar">
        </form>

</body>

</html>