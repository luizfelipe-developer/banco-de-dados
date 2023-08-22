<?php
    // isset -> serve para saber se uma variável está definida
    include_once('config.php');
    if(isset($_POST['update']))
    {
        $cod_aluno = $_POST['cod_aluno'];
        $nome = $_POST['nome'];
        $endereco = $_POST['endereco'];
        $CPF = $_POST['CPF'];
        $telefone = $_POST['telefone'];
        $genero = $_POST['genero'];
        
        
        $sqlInsert = "UPDATE alunos 
        SET nome='$nome', endereco='$endereco',CPF='$CPF',telefone='$telefone',genero='$genero'
        WHERE cod_aluno=$cod_aluno";
        $result = $conexao->query($sqlInsert);
        print_r($result);
        header('Location: sistema-aluno.php');
    }
     if(isset($_POST['updatePerso']))
    {
        $cod_personal = $_POST['cod_personal'];
        $nome = $_POST['nome'];
        $endereco = $_POST['endereco'];
        $cref = $_POST['cref'];
        $telefone = $_POST['telefone'];
        
        
        
        $sqlInsert = "UPDATE personal 
        SET nome='$nome', endereco='$endereco',cref='$cref',telefone='$telefone'
        WHERE cod_personal=$cod_personal";
        $result = $conexao->query($sqlInsert);
        print_r($result);
        header('Location: sistema-personal.php');
    }

?>