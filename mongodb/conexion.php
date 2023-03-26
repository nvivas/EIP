<?php
session_start();
$mysql_host = "localhost";
$mysql_user = "nacho";
$mysql_password = "nacho";
$conexion = mysqli_connect($mysql_host, $mysql_user, $mysql_password) or die("No ha podido realizarse la conexión con la base de datos");

$basedatos = "hotel";
mysqli_select_db($conexion, $basedatos) or die("Error en la selección de la base de datos");
