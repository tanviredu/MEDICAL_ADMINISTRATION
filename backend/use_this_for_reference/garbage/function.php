<?php 

    class functions{

        public function redirect($url){

            return header("Location: $url");
        }

        
    }

    $func = new functions;

?>