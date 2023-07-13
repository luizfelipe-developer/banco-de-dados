<?php
    include "conexao.php";
    
    if(mysqli_connect_error())
    trigger_error(mysqli_connect_error());


        
        $sqlP = "SELECT * FROM `paciente` ";
        $queryP = $conexao->query($sqlP);

        
        $msgP = $queryP->num_rows;

?>