<?php

// Destinatario
$to = "moeshe@gmail.com";
// Asunto
$subject = "Pruebita de envío de correo";
// Mensaje
$message = "Hola, esto es una prueba desde PHP";

// Cabecera FROM, CC, 
$headers = "MIME-Version: 1.0\r\n";
$headers .= "Content-type:txt/html;charset=UTF-8\r\n";
$headers .= "From: delpalisimo@hotmail.com\r\n";
     

//        if( mail(  $to, $subject, $message, $headers ) ) {
//         echo "Correo enviado con exito";
//        } else {
//         echo "Ha habido algún error";
//        }
