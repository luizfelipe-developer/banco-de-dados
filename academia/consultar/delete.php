<?php

    if(!empty($_GET['cod_aluno']))
    {
        include_once('config.php');

        $cod_aluno = $_GET['cod_aluno'];

        $sqlSelect = "SELECT *  FROM matricula_aluno WHERE cod_aluno=$cod_aluno";

        $result = $conexao->query($sqlSelect);

        if($result->num_rows > 0)
        {
            $sqlDelete = "DELETE FROM matricula_aluno WHERE cod_aluno=$cod_aluno";
            $resultDelete = $conexao->query($sqlDelete);
        }
    }
    header('Location: sistema.php');
   
?>