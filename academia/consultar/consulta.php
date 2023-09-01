<?php
    include "config.php";

    session_start();
    
    if(mysqli_connect_error())
    trigger_error(mysqli_connect_error());

    $id_user = $_SESSION['idUsu'];
    $user = $_SESSION['nomeUse'];


?>