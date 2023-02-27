<?php
    session_start(); // Recuperando session


    unset($_SESSION); 
    session_destroy();

?>