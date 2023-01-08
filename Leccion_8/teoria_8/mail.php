<?php
    ini_set( 'display_errors', '1' );
    error_reporting( E_ALL );
    
    // Destinatario
/*     $to = "manu.jr9@gmail.com";
    // Asunto
    $subject = "Pruebita de envío de correo";
    // Mensaje
    $message = "Hola qué tal :)";
    // Cabeceras
    $headers = "From: mjimenez@rubrika.es\r\n";
    $headers .= "CC: hqmgcwkqqnltbwmgob@tmmbt.com";

    if( mail( $to, $subject, $message, $headers ) ){
        echo "Correo enviado con éxito";
    }else{
        echo "Ha habido algún error";
    }
 */


    if( 
        isset($_POST['correo']) &&
        isset($_POST['mensaje'])
    ){

        // Destinatario
        $to = "manu.jr9@gmail.com";
        // Asunto
        $subject = "Pruebita de envío de correo";
        // Mensaje
        $message = '<!DOCTYPE html>
        <html lang="en">
        <head>
            <title>Document</title>
        </head>
        <body>
            <h1 style="color: red" >Consulta en la web de '.$_POST['correo'].'</h1>
            <p>'.$_POST['mensaje'].'</p>
        </body>
        </html>';
        // Cabeceras
        $headers = "MIME-Version: 1.0\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8\r\n";
        $headers .= "From: ".$_POST['correo']."\r\n";
        $headers .= "CC: hqmgcwkqqnltbwmgob@tmmbt.com";
    
        if( mail( $to, $subject, $message, $headers ) ){
            echo "Correo enviado con éxito";
        }else{
            echo "Ha habido algún error";
        }

    }








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
    <form action="" method="post">
        <input type="email" name="correo" id=""><br>
        <textarea name="mensaje" id="" cols="30" rows="10"></textarea>
        <input type="submit" value="Enviar">
    </form>
    
</body>
</html>


