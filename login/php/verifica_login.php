<?php 
    require_once 'conexao.php';

    if (isset($_POST['bt-entrar'])) {
        $login = $_POST['login'];
        $senha = $_POST['senha'];
        echo "Usuário: ".$login; 
        echo "<br>";
        echo "Senha: ".$senha; 
        
        $sql = "SELECT `usuario` FROM `usuarios` WHERE `usuario`='$login'";
        $resultado = $conexao -> query($sql);
        $qtd = mysqli_num_rows($resultado);
        echo "<br>";

        echo "qtd: ".$qtd;
    }

?>