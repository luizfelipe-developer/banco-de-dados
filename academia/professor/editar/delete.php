<?php

    if(!empty($_GET['cod_professor']))
    {
        include_once('config.php');

        $cod_professor = $_GET['cod_professor'];

        $sqlSelect = "SELECT *  FROM matricula_professor WHERE cod_professor=$cod_professor";

        $result = $conexao->query($sqlSelect);

        if($result->num_rows > 0)
        {
            $sqlDelete = "DELETE FROM matricula_professor WHERE cod_professor=$cod_professor";
            $resultDelete = $conexao->query($sqlDelete);
        }
    }
    header('Location: ../paginas.php');
   
?>