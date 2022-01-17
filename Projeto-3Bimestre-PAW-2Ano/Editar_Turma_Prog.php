<?php

include "ClasseTurma.php";

    $idTurma = $_POST['idTurma'];
    $nomeTurma = $_POST['nomeTurma'];
    $nomeCurso = $_POST['nomeCurso'];

    if (empty($idTurma) || empty($nomeTurma) || empty($nomeCurso)){

        header("location: View_Tabela_Turma.php");
        exit;

    }


    if (is_numeric($idTurma)){

        $turma = new Turma();

        $turma->setId_turma($idTurma);
        $turma->setNome_turma($nomeTurma);
        $turma->setNome_curso($nomeCurso);

        echo $turma->EditarTurma();

        header("location: View_Tabela_Turma.php");
        exit;

    }else{

        header("location: View_Tabela_Turma.php");
        exit;

    }



?>