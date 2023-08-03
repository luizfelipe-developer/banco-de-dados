<?php
    include "conexao.php";
    if(mysqli_connect_error())
    trigger_error(mysqli_connect_error());    
        $sqlAlun = "SELECT * FROM `alunos` ";
        $query = $conexao->query($sqlAlun);
        $msg = $query->num_rows;
?>