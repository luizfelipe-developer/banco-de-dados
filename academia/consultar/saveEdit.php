<?php
    // isset -> serve para saber se uma variável está definida
    include_once('config.php');
    if(isset($_POST['update']))
    {
        $cod_aluno = $_POST['cod_aluno'];
        $nome = $_POST['nome'];
        $sobrenome = $_POST['sobrenome'];
        $endereco = $_POST['endereco'];
        $CPF = $_POST['CPF'];
        $telefone = $_POST['telefone'];
        $genero = $_POST['genero'];
        
        
        $sqlInsert = "UPDATE matricula_aluno 
        SET nome='$nome',sobrenome='$sobrenome',endereco='$endereco',CPF='$CPF',telefone='$telefone',genero='$genero'
        WHERE cod_aluno=$cod_aluno";
        $result = $conexao->query($sqlInsert);
        print_r($result);
    }
    header('Location: sistema.php');

?>