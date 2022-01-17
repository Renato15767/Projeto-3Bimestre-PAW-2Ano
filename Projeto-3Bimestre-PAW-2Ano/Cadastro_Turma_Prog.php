<?php

    include "ClasseTurma.php";

    $idTurma = $_POST['idTurma'];
    $nomeTurma = $_POST['nomeTurma'];
    $curso = $_POST['nomeCurso'];

    if (empty($nomeTurma) || empty($curso) || empty($idTurma)){

        header('location: View_Tabela_Turma.php');
        exit;
    }

  
    if (is_numeric($idTurma)){

        $turma = new Turma();

        $turma->setId_turma($idTurma);
        $turma->setNome_turma($nomeTurma);
        $turma->setNome_curso($curso);
    
        echo $turma->cadastrarTurma();

        
        header('location: View_Tabela_Turma.php');
        exit;
       

    }else{


        header('location: View_Tabela_Turma.php');
        exit;

    }

   

    

   
    


?>