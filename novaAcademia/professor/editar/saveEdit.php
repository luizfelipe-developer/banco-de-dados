<?php
    // isset -> serve para saber se uma variável está definida
    include_once('config.php');
    if(isset($_POST['update']))
    {
        $cod_professor = $_POST['cod_professor'];
        $nome = $_POST['nome'];
        $sobrenome = $_POST['sobrenome'];
        $endereco = $_POST['endereco'];
        $CPF = $_POST['CPF'];
        $telefone = $_POST['telefone'];
        $genero = $_POST['genero'];
        $cref = $_POST['cref'];

        
        
        $sqlInsert = "UPDATE matricula_professor
        SET nome='$nome',sobrenome='$sobrenome',endereco='$endereco',CPF='$CPF',telefone='$telefone',genero='$genero' ,cref='$cref'
        WHERE cod_professor=$cod_professor";
        $result = $conexao->query($sqlInsert);
        print_r($result);
    }
    header('Location: ../paginas.php');

?>