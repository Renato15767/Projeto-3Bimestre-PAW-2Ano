<?php

include "ClasseAluno.php";

    $matricula = $_POST['matricula'];

    if (empty($matricula)){

        header("location: View_Tabela_Aluno.php");
        exit;

    }


    if (is_numeric($matricula)){

        $aluno = new Aluno();

        $aluno->setMatricula($matricula);

        echo $aluno->ApagarAlunos();

        header("location: View_Tabela_Aluno.php");
        exit;

    }else{

        header("location: View_Tabela_Aluno.php");
        exit;


    }







?>