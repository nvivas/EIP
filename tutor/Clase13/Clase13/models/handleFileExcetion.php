<?php
    class HandleFileException extends Exception{

        private $filename;
        

        public function errorMessage(){
            return "Ha habido un error en la subida del archivo";
        }


    }


?>