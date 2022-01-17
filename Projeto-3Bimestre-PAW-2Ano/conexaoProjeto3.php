<?php

    class Banco{

        private $host = "localhost";
        private $user = "root";
        private $password ="";
        private $banco = "escola_univap";
        public $con;
   
        function __construct(){

           $this->con=mysqli_connect($this->host, $this->user, $this->password, $this->banco) or die(mysqli_error());

        }

        public function executarSql($sql){

            $resultado = mysqli_query($this->con,$sql);
            return $resultado;

        }
        
    
    }

?>