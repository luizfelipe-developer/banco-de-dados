<?php
    include "conexao.php";
    session_start(); //inicializa a sessao
    
    if(mysqli_connect_error())
    trigger_error(mysqli_connect_error());


       $idUsu = $_SESSION['idUsu'];
        $user =  $_SESSION['nomeUsu'];
        
       // $sql = "SELECT * FROM `medico` ";
       $sql= "SELECT * FROM `medico` WHERE `nome`= '$user' AND `crm`= '$idUsu'";

        $query = $conexao->query($sql);

        $msg = $query->num_rows;
    

?>