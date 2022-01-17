<?php

    include "ClasseAluno.php";

    $matricula = $_POST['matricula'];
    $nomeAluno = $_POST['nomeAluno']; 
    $rg = $_POST['RG'];
    $cpf = $_POST['CPF'];
    $dataNascimento = $_POST['dataNascimento'];
    $idTurma_Aluno = $_POST['idTurma_Aluno'];


    if (empty($matricula) || empty($nomeAluno) || empty($rg) || empty($cpf) || empty($dataNascimento) || empty($idTurma_Aluno)){

        header('location: View_Tabela_Aluno.php');
        exit;
    }

    if (is_numeric($matricula) && is_numeric($rg) && is_numeric($cpf) && is_numeric($idTurma_Aluno)){

        $aluno = new Aluno();

        $aluno->setMatricula($matricula);
        $aluno->setNome($nomeAluno);
        $aluno->setRg($rg);
        $aluno->setCpf($cpf);
        $aluno->setData_nascimento($dataNascimento);
        $aluno->setId_turma($idTurma_Aluno);
    
        echo $aluno->CadastrarAluno();

        header('location: View_Tabela_Aluno.php');
        exit;

    }else{


        header('location: View_Tabela_Aluno.php');
        exit;


    }




?>