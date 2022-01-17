<html>

<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <meta charset="utf-8">
</head>






    
<div class="w3-container"> 

    </p>
    <h1>Cadastro de Turmas:</h1>

 

    
    <form class="w3-container" action="Cadastro_Turma_Prog.php" method="POST">

        <input class="w3-input w3-border" style="width:30%" type="text" name="idTurma" id="idTurma" placeholder="Digite o id da turma" /><br>
        <input class="w3-input w3-border" style="width:30%" type="text" name="nomeTurma" id="nomeTurma" placeholder="Digite o nome da Turma" /><br>
        <input class="w3-input w3-border" style="width:30%" type="text" name="nomeCurso" id="nomeCurso" placeholder="Digite o nome do Curso" /><br>

        <input type="submit" class="btn btn-dark" name="btnEnviar" value="Enviar" />

    </form>
    <br>

</div>

</html>







<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<meta charset="utf-8">
<body>

<div class="w3-container"> 

    <h1>Editar Tabela:</h1>

    <form class="w3-container" action="Editar_Turma_Prog.php" method="POST">

        <input class="w3-input w3-border" style="width:30%" type="text" name="idTurma" id="idTurma" placeholder="Digite o ID Turma" /><br>
        <input class="w3-input w3-border" style="width:30%" type="text" name="nomeTurma" id="nomeTurma" placeholder="Digite o nome da Turma" /><br>
        <input class="w3-input w3-border" style="width:30%" type="text" name="nomeCurso" id="nomeCurso" placeholder="Digite o nome do Curso" /><br>

        <input type="submit" class="btn btn-dark" name="btnEnviar" value="enviar" />

    </form>

</div>

    <br>
    

</body>


</html>







<html>

<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<meta charset="utf-8">

<body>


        
<div class="w3-container"> 

    </p>
    <h1>Apagar Turma (não apagará se houver alunos cadastrados):</h1>

 

    
    <form class="w3-container" action="Apagar_Turma_Prog.php" method="POST">

        <input class="w3-input w3-border" style="width:30%" type="text" name="idTurma" id="idTurma" placeholder="Digite o id da turma" /><br>
        

        <input type="submit" class="btn btn-dark" name="btnEnviar" value="Enviar" />

    </form>
    <br>

</div>

</html>




<html>
<head>
</head>









<?php

require_once "ClasseTurma.php";

    echo "<html><head>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' href='https://www.w3schools.com/w3css/4/w3.css'>

    </head><body><div class='w3-container'>";

    

    $turma = new Turma();
    

    $resultado = $turma->ListarTurma();
    $tabela = "<table border = 1 class='w3-table-all w3-centered'> 
                <tr class='w3-light-grey'>

                <td width=300><b>ID_Turma</b></td>
                <td width=300><b>Nome_Turma</b></td>
                <td width=300><b>Curso</b></td>

                </tr>";


                


        while($linha = mysqli_fetch_array($resultado)){

            $id = $linha['id_turma'];
            $nome = $linha['nome_turma'];
            $curso = $linha['nome_curso'];

            $tabela.="<tr class='w3-light-grey'>
                        <td>$id</td>
                        <td>$nome</td>
                        <td>$curso</td>
                        
                    </tr>";

                   

        }
        echo "</body></html>";
        

        
	    echo $tabela; 


        






        echo "<a href='View_Tabela_Aluno.php'><h3>Ir para Alunos</h3></a>";
        echo "<p><h3><a href='view_TelaInicial.html'>Voltar a tela inicial</a></h3><br>";
       


        


        
    


?>







