<?php 
    session_start();
    echo "Usuário 1:".$_SESSION['user'];
    echo "<br>";
    echo "Usuário 2:".$_SESSION['user2'];
    echo "<br>";

    echo "ID da sessão: ".session_id();
?>