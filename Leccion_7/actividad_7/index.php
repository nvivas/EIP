<?php
// Recogida de datos 
// validaciones de Login
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda online PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link href="assets/css/style.css" rel="stylesheet">

</head>

<body>
    <?php
    $correcto = false;

    echo "Variable " . $correcto;
    // require_once("./nav.php");
    ?>
    <main>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12">
                    <?php
                    // 2. Recoger la información y proteger las validaciones
                    $correo = isset($_POST['correo']) ? $_POST['correo'] : "";
                    $contraseña = isset($_POST['contraseña']) ? $_POST['contraseña'] : "";

                    if (isTodoCorrecto()) {
                        $correcto = false;
                        require("./nav.php");
                        require_once("./correcto.php");
                    } else {
                        $correcto = true;
                        require("./nav.php");
                        require_once("./formulario.php");
                    }

                    echo "</br>";

                    if (!empty($contraseña) || !empty($correo)) {

                        // 3.2 El correo tenga formato de correo (texto@texto.texto)
                        if (isValido()) {
                    ?>
                            <div>Esta dirección de correo NO ES VALIDA</div>
                    <?php
                            // echo "Esta dirección de correo $correo NO es válida.";
                        }

                        echo "</br>";
                        // 3.3 La contraseña tiene que tener al menos 6 caracteres"

                        if (!isMax()) {
                            echo "La contraseña $contraseña no es válida";
                        }
                        echo "</br>";

                        // 3.3 No puede contener las palabras "password" ni "123456"
                        if (!isPass() || !isNum()) {
                            echo "No puede tener ni 'password' ni '123456' en la contraseña: '$contraseña'"; // false
                        }
                    } else {
                        // 3.1 Campos obligatorios: email y contraseña (no pueden ser vacíos)
                        echo "El correo o la contraseña está vacío </br>";
                    }
                    function isTodoCorrecto()
                    {
                        if (isVacio() && !isValido() && isVacio() && isMax() && isPass() && isNum()) {
                            return true;
                        }
                    }

                    function isValido()
                    {
                        global $correo;
                        $isVerdad = filter_var($correo, FILTER_VALIDATE_EMAIL) ? false : true;
                        return $isVerdad;
                    }

                    function isVacio()
                    {
                        global $correo;
                        global $contraseña;

                        $isVerdad = !empty($contraseña) && !empty($correo) ? true : false;
                        return $isVerdad;
                    }

                    function isMax()
                    {
                        global $contraseña;

                        $isVerdad = strlen($contraseña) >= 6 ? true : false;
                        return $isVerdad;
                    }

                    function isPass()
                    {
                        global $contraseña;
                        $palabraProhibida = "password";
                        $posPass = strpos($contraseña, $palabraProhibida);

                        return $posPass === false;
                    }

                    function isNum()
                    {
                        global $contraseña;
                        $numerosProhibida = "123456";
                        $posNum = strpos($contraseña, $numerosProhibida);

                        return $posNum === false;
                    }
                    ?>
                </div>
            </div>
        </div>
    </main>
    <?php
    require_once("./footer.php");
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>