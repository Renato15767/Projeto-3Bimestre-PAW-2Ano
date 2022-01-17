<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <meta charset="utf-8">
</head>
<body>

<div class="w3-container"> 
    <h1>Cadastro de Aluno:</h1>

      
    <form class="w3-container" action="Cadastro_Aluno_Prog.php" method="POST">

        <input class="w3-input w3-border" style="width:30%" type="text" name="matricula" id="matricula" placeholder="Digite a Matrícula" /><br>
        <input class="w3-input w3-border" style="width:30%" type="text" name="nomeAluno" id="nomeAluno" placeholder="Digite o nome do Aluno" /><br>
        <input class="w3-input w3-border" style="width:30%" type="text" name="RG" id="RG" placeholder="Digite o RG" /><br>
        <input class="w3-input w3-border" style="width:30%" type="text" name="CPF" id="CPF" placeholder="Digite o CPF" /><br>
        <input class="w3-input w3-border" style="width:30%" type="text" name="dataNascimento" id="dataNascimento" placeholder="Digite a data de nascimento" /><br>
        <input class="w3-input w3-border" style="width:30%" type="text" name="idTurma_Aluno" id="idTurma_Aluno" placeholder="Digite o ID da Turma do Aluno" /><br>

        <input type="submit" class="btn btn-dark" name="btnEnviar" value="Enviar" />

    </form>


    <br>
    <br>
</div>

</body>
</html>





<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <meta charset="utf-8">
</head>
<body>

<div class="w3-container"> 

    <h1>Editar Tabela Alunos:</h1>

    <form class="w3-container" action="Editar_Aluno_Prog.php" method="POST">

        <input class="w3-input w3-border" style="width:30%" type="text" name="matricula" id="matricula" placeholder="Digite a Matrícula" /><br>
        <input class="w3-input w3-border" style="width:30%" type="text" name="nomeAluno" id="nomeAluno" placeholder="Digite o nome do Aluno" /><br>
        <input class="w3-input w3-border" style="width:30%" type="text" name="RG" id="RG" placeholder="Digite o RG" /><br>
        <input class="w3-input w3-border" style="width:30%" type="text" name="CPF" id="CPF" placeholder="Digite o CPF" /><br>
        <input class="w3-input w3-border" style="width:30%" type="text" name="dataNascimento" id="dataNascimento" placeholder="Digite a data de nascimento" /><br>
        <input class="w3-input w3-border" style="width:30%" type="text" name="idTurma_Aluno" id="idTurma_Aluno" placeholder="Digite o ID da Turma do Aluno" /><br>

        <input type="submit" class="btn btn-dark" name="btnEnviar" value="Enviar" />

    </form>

</div>

    <br>
    <br>
</body>
</html>








<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <meta charset="utf-8">
</head>
<body>

<div class="w3-container"> 

    <h1>Apagar Aluno:</h1>

    <form class="w3-container" action="Apagar_Aluno_Prog.php" method="POST">

        <input class="w3-input w3-border" style="width:30%" type="text" name="matricula" id="matricula" placeholder="Digite a Matrícula" /><br>
        
        <input type="submit" class="btn btn-dark" name="btnEnviar" value="Enviar" />

    </form>

    <br>
    <br>

</div>

</body>
</html>






<?php

include_once "ClasseAluno.php";

    echo "<html><head>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' href='https://www.w3schools.com/w3css/4/w3.css'>

    </head><body><div class='w3-container'>";


    echo "<h1>Tabela alunos com dados e respectivas Turmas:</h1>";

    $aluno = new Aluno();

    $resultado = $aluno->ListarAlunos();
    $tabela = "<table border = 1 class='w3-table-all w3-centered'> 
                <tr class='w3-light-grey'>
                
                <td width=300><b>Matricula</b></td>
                <td width=300><b>Nome</b></td>
                <td width=300><b>RG</b></td>
                <td width=300><b>CPF</b></td>
                <td width=300><b>Data de Nascimento</b></td>
                <td width=300><b>ID_Turma</b></td>
                
                </tr>";



            while($linha = mysqli_fetch_array($resultado)){

                $ma = $linha['matricula'];
                $no = $linha['nome'];
                $rg = $linha['rg'];
                $cpf = $linha['cpf'];
                $data = $linha['data_nascimento'];
                $idTurma = $linha['id_turma'];

                $tabela .= "<tr class='w3-light-grey'>
                                <td>$ma</td>
                                <td>$no</td>
                                <td>$rg</td>
                                <td>$cpf</td>
                                <td>$data</td>
                                <td>$idTurma</td>
                                
                            </tr>";

                            
                

            }echo "</table>";

       
    
            

            echo "</table>" . $tabela;



     //-----------------------------------------------------------------
     
        

            


        $resultado_selecionado = $aluno->ListarAlunos();
        $tabela_selecionado = "<table border = 1 class='w3-table-all w3-centered'> 
                <tr class='w3-light-grey'>
                
                <td width=300><b>Matricula</b></td>
                <td width=300><b>Nome</b></td>
                <td width=300><b>ID_Turma</b></td>
                
                </tr>";

                

            while($linha_selecionada = mysqli_fetch_array($resultado_selecionado)){

                

                $ma = $linha_selecionada['matricula'];
                $no = $linha_selecionada['nome'];
                $idTurma = $linha_selecionada['id_turma'];

                $tabela_selecionado .= "<tr class='w3-light-grey'>
                                <td>$ma</td>
                                <td>$no</td>
                                <td>$idTurma</td>
                            </tr>";
                

            } echo "</table>";
            echo "</body></html>";
       
            
            

            echo $tabela_selecionado;

            echo "<br><a href='View_Tabela_Turma.php'><h3>Ir para Turma</h3></a>";
            echo "<a href='view_TelaInicial.html'><h3>Voltar a Tela Inicial</h3></a>";

            echo "<br><h1>Tabela alunos com nomes e respectivas Turmas:</h1>";
            
       


?>










