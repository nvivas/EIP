<?php

require 'vendor/autoload.php';

// Conectar con la base de datos
$cliente = new MongoDB\Client('mongodb://localhost:27017');

// Seleccionar una base de datos
$database = $cliente->nacho;
