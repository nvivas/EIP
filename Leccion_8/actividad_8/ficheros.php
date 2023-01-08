<?php

if (!file_exists("uploads")) {
        // Crear uploads
        mkdir("uploads");
}

if ($_FILES['imagen']['type'] == "image/jpeg" && $_FILES['imagen']['type'] == "image/jpg" && $_FILES['imagen']['type'] == "image/png") {
        // Origen
        $from = $_FILES['imagen']['tmp_name'];
        // destino
        $to = "uploads/" . $_FILES['imagen']['name'];
        move_uploaded_file($from, $to);
}
