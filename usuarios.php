<?php


    class Usuarios {

        //variavel de conexão com o banco
        private $db; 

        public function __construct() {

            try{
                $this->db = new PDO("mysql:dbname=novoblog;host=localhost", "root", "");//query de conexão com o banco

            } catch(PDOException $e) {
                echo "Falha: ".$e->getMessage();
            }

        }

        public function selecionar($id) {
            
            /*
            $sql = "SELECT * FROM usuarios WHERE id = '$id'"; //query sem o statement
            */

            //query com statement
            $sql = $this->db->prepare("SELECT * FROM usuarios WHERE id = ");


        }

    }