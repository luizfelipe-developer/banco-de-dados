<?php 
    require_once 'conexao.php';

    if (isset($_POST['bt-entrar'])) {
        $login = $_POST['login'];
        $senha = $_POST['senha'];
        echo "Usuário: ".$login; 
        echo "<br>"
        
        echo "Senha: ".$senha; 
    }

?>