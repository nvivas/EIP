<?php

    ini_set('display_errors', "1");
    error_reporting(E_ALL);
    
    require_once("models/user.php");
    require_once("models/handleFileExcetion.php");

    print_r($_GET);
    /* try {
        // Nuestro código, como si fuera todo okey;
        //
        User::login();


    } catch (\Throwable $th) {
        $error = $th->getMessage();
        // Si hay un error...
        echo "ERROR";
        echo "<pre>";
        print_r($th);
        echo "</pre>";


    } */

    try {
        // Nuestro código, como si fuera todo okey;
        //
        User::login();

    } catch (Error $e) {
        $error = $e->getMessage();
        // Si hay un error...
        echo "ERROR";
        echo "<pre>";
        print_r($e);
        echo "</pre>";

    }catch (HandleFileException $ex){
        // Si hay un error...
        echo "HandleFileException";
        echo "<pre>";
        print_r($ex);
        echo "</pre>"; 
    }catch (Exception $ex){
         // Si hay un error...
         echo "EXCEPTION";
         echo "<pre>";
         print_r($ex);
         echo "</pre>"; 
    } finally{

        echo "FINALLY";
    }





   function nombre($nombre){

   }
   



   if( isset($error) ){
    echo "<h2>". $error."</h2>";
   }
?>





