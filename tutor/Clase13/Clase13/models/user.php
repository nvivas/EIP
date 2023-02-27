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

        // permitirnos acceder a propiedades privadas...
        public function __get( $prop ){
            echo "GET Mágico... $prop";
            return $this->$prop;
        }
        public function __set( $prop, $value ){
            return $this->$prop = $value;
        }

        public function fullName(){
            return $this->name." ".$this->lastname;
        }

        public function age(){

            $nacimiento = new DateTime($this->birthDate);
            $hoy = new DateTime(date("Y-m-d"));
            $dif = $hoy->diff($nacimiento);
            return $dif->format("%y");

        } 

        // GUARD CLAUSSES
        public static function login(){
            // camposobligatorios...

            if( 
                isset($_GET['email']) && empty($_GET['email'])
            ){
                throw new Exception("El correo está vacío");

            }

            if( 
                isset($_GET['email']) && !filter_var($_GET['email'], FILTER_VALIDATE_EMAIL)
            ){
                throw new Exception("El correo no tiene formato adecuado");

            }


            

          
            //self::formatoContrasena();
           
          

            self::uploadFile();





        }


        private static function formatoContrasena(){

            throw new Exception("Formato incorrecto de la contraseña");
        

        }

        private static function uploadFile(){

            throw new HandleFileException("Problema al subir imagen");
        

        }




     
    }
?>