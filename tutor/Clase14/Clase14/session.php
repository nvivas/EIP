<?php


// Abrir una session nueva o bien recuperar una existente
session_name("APPSESSION");
session_start();
print_r($_SESSION);

$_SESSION['usuario'] = "Juanito";
echo "<br>";
echo session_id(); // 
echo "<br>";

echo session_name(); // 
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


    <form action="" method="POST">
        <input type="email" name="correo">
        <input type="submit" value="Login" name="login">
    </form>


    <form action="" method="POST">
        <input type="submit" value="Logout" name="logout">
    </form>



</body>

</html>