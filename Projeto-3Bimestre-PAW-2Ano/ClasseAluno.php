<?php

    include "conexaoProjeto3.php";

    class Aluno{

        private $matricula;
        private $nome;
        private $rg;
        private $cpf;
        private $data_nascimento;
        private $id_turma;
        private $banco;

        function __construct(){

            $this-> banco = new Banco();

        }


        public function CadastrarAluno(){

            $matricula = $this->getMatricula();
            $nome = $this->getNome();
            $rg = $this->getRg();
            $cpf = $this->getCpf();
            $data_nascimento = $this->getData_nascimento();
            $id_turma = $this->getId_turma();

            $sql = "insert into tbl_aluno(matricula, nome, rg, cpf, data_nascimento, id_turma) values ('$matricula', '$nome', '$rg', '$cpf','$data_nascimento', '$id_turma')";

            $resultado = $this->banco->executarSql($sql);
            return $resultado;

        }

        public function ListarAlunos(){

            $sql = "select * from tbl_aluno;";

            $resultado = $this->banco->executarSql($sql);
            return $resultado;


        }

        public function EditarAlunos(){

            $matricula = $this->getMatricula();
            $nomeAluno = $this->getNome();
            $rg = $this->getRg();
            $cpf = $this->getCpf();
            $dataNascimento = $this->getData_nascimento();
            $idTurma_Aluno = $this->getId_turma();


            $sql = "update tbl_aluno set nome ='$nomeAluno', rg = '$rg', cpf = '$cpf', data_nascimento = '$dataNascimento', id_turma = '$idTurma_Aluno' where matricula = '$matricula';";

            $resultado = $this->banco->executarSql($sql);
            return $resultado;

        }

        public function ApagarAlunos(){

            $matricula = $this->getMatricula();

            $sql = "delete from tbl_aluno where matricula = '$matricula';";

            $resultado = $this->banco->executarSql($sql);
            return $resultado;

        }




        public function getMatricula(){

            return $this->matricula;

        }
    
        public function setMatricula($v){

            $this->matricula = $v;

        }

        public function getNome(){

            return $this->nome;

        }

        public function setNome($v){

            $this->nome=$v;

        }

        public function getRg(){

            return $this->rg;

        }

        public function setRg($v){

            $this->rg=$v;

        }

        public function getCpf(){

            return $this->cpf;

        }

        public function setCpf($v){

            $this->cpf=$v;

        }

        public function getData_nascimento(){

            return $this->data_nascimento;

        }

        public function setData_nascimento($v){

            $this->data_nascimento=$v;

        }

        public function getId_turma(){

            return $this->id_turma;

        }

        public function setId_turma($v){

            $this->id_turma=$v;

        }


    }




?>


