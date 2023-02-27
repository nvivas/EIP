<?php
    print_r($_COOKIE);

    setcookie("usuario", "Pepe", time() + 60*60*24 );

/* 
    if primera vez
        creamos cookie = 1
    
        contador = 1
    else{
        recojo cookie 
        crear una nueva cookie mismo nombre +1 de valor
    }

     */

       // nuestra 1a vez
    if( !isset( $_COOKIE['contador'] ) ){

        setcookie("contador", 1);
        $contador = 1;
    }else{
        $contador = $_COOKIE['contador'] + 1;
        setcookie("contador", $contador); // 2

    }

    

    if( isset($_POST['deletecookie']) ){
        setcookie("contador", "", time()-1);
    }
    
   







?>


<form action="" method="post">
    <input type="submit" value="Borrar Cookie" name="deletecookie">
</form>

<h1>Has entrado: <?= $contador ?></h1>