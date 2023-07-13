<?php
    include "conexao.php";
    
    if(mysqli_connect_error())
    trigger_error(mysqli_connect_error());
        
        $sql = "SELECT * FROM `medico` ";
        $query = $conexao->query($sql);

        $msg = $query->num_rows;
    

?>