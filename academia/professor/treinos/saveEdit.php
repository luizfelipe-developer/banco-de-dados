<?php
    // isset -> serve para saber se uma variável está definida
    include_once('conexao.php');
    if(isset($_POST['update']))
    {
        $cod_aluno = $_POST['cod_aluno'];
        $segunda = $_POST['segunda'];
        $terca = $_POST['terca'];
        $quarta = $_POST['quarta'];
        $quinta = $_POST['quinta'];
        $sexta = $_POST['sexta'];
        
        
        $sqlInsert = "UPDATE personal
        SET segunda='$segunda',terca='$terca',quarta='$quarta',quinta='$quinta',sexta='$sexta'
        WHERE cod_aluno=$cod_aluno";
        $result = $conexao->query($sqlInsert);
        print_r($result);
    }
    header('Location: paginas.php');

?>