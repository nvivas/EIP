<?php
    class User{
        // Propiedades
        private $name;
        private $lastname;
        private $email;
        private $birthDate;

        // Constructor --> Guardar info como propiedades
        public function __construct( $nombre, $lastname, $correo, $fecha ){
            $this->name = $nombre;
            $this->lastname = $lastname;
            $this->email = $correo;
            $this->birthDate = $fecha;
        }
    }
?>