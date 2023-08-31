<?php

    if(!empty($_GET['cod_aluno']))
    {
        include_once('conexao.php');

        $cod_aluno = $_GET['cod_aluno'];

        $sqlSelect = "SELECT *  FROM personal WHERE cod_aluno=$cod_aluno";

        $result = $conexao->query($sqlSelect);

        if($result->num_rows > 0)
        {
            $sqlDelete = "DELETE FROM personal WHERE cod_aluno=$cod_aluno";
            $resultDelete = $conexao->query($sqlDelete);
        }
    }
    header('Location: paginas.php');
   
?>