<?php


    $num = 4;
    $resultado = $num * 4;  // 16


    $num = 20;
    $resto = $num % 5;  //4 --> 0

    $num = 20;
    $num == 20;    //       TRUE 
    $num === 20;   //       TRUE  


    $num = "20 goles";    // string  --> 20
    echo $num == 20;     //       TRUE  1
    echo $num === 20;    //       FALSE 

    $b =" Si que estoy";

    echo $a ?? $b;

    echo "<br>";
    echo "<br>";
    echo "<br>";

    $saludo = "Hola";

   // $saludo = $saludo." Mundo!";

    $saludo .= " Mundo!";

    echo  $saludo;
    echo "<br>";
    echo "<br>";
    echo "<br>";

    $num = 50;

    // post incremento -- > utilizo $a y después +1
    echo ++$num;    // 21
    echo $num;      // 21


    if( $num < 20){
        echo "Mi número es menor que 20";
    }else if( $num >= 20 && $num < 40 ){
        echo "Mi número es mayor que 20 y menor que 40";
    }else{
        echo "Mayor que 40";
    }

    $posicion = "POR";

    switch ($posicion) {
        case "POR":
        case "DEF":
            echo "Es un defensor!";
            break;
            
        default:
            echo "Es un atacante";
            break;
    }


    $edad = 40;

    if ( $edad > 18 ) {
        $resultado = 'mayor de edad';
    } else {
        $resultado = 'menor de edad';
    }


    $resultado =  $edad > 18 ? 'mayor de edad' : 'menor de edad';

    echo "<br>";
    echo "<br>";
    echo $resultado;
