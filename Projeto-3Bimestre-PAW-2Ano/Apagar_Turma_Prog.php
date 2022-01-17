<?php

include "ClasseTurma.php";


    $idTurma = $_POST['idTurma'];



    if (empty($idTurma)){

        header("location: View_Tabela_Turma.php");
        exit;

    }



    if (is_numeric($idTurma)){

        $turma = new Turma();

        $turma->setId_turma($idTurma);

        echo $turma->ApagarTurma();

        header("location: View_Tabela_Turma.php");
        exit;

    }else{

        header("location: View_Tabela_Turma.php");
        exit;

    }



?>