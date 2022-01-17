<?php

    include "conexaoProjeto3.php";

    class Turma{

        private $id_turma;
        private $nome_turma;
        private $nome_curso;
        private $banco;


        function __construct(){

            $this-> banco = new Banco();

        }


        public function cadastrarTurma(){

            $sql = "";
            $id_turma = $this->getId_turma();
            $nome_turma = $this->getNome_turma();
            $nome_curso = $this->getNome_curso();

            $sql = "insert into tbl_turma (id_turma, nome_turma, nome_curso) values ('$id_turma', '$nome_turma', '$nome_curso')";

            $this->banco->executarSql($sql);
            return "Cadastrado com sucesso !!!";

        }


        public function ListarTurma(){

            $sql = "select * from tbl_turma";

            $resultado = $this->banco->executarSql($sql);
            return $resultado;



        }


        public function EditarTurma(){

            $id_turma = $this->getId_turma();
            $nome_turma = $this->getNome_turma();
            $nome_curso = $this->getNome_curso();

            $sql = "update tbl_turma set nome_turma = '$nome_turma', nome_curso = '$nome_curso' where id_turma='$id_turma';";

            $resultado = $this->banco->executarSql($sql);

            return $resultado;

        }


        public function ApagarTurma(){

            $idTurma = $this->getId_turma();
  
            $sql = "delete from tbl_turma where id_turma = '$idTurma';";

            $resultado = $this->banco->executarSql($sql);
            return $resultado;

        }




        public function getId_turma(){

            return $this->id_turma;

        }

        public function setId_turma($v){

            $this->id_turma=$v;

        }



        public function getNome_turma(){

            return $this->nome_turma;

        }


        public function setNome_turma($v){

            $this->nome_turma=$v;

        }

    
        public function getNome_curso(){

            return $this->nome_curso;

        }


        public function setNome_curso($v){

            $this->nome_curso=$v;

        }





    }



?>