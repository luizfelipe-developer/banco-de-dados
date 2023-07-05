<?php 
    require_once 'conexao.php';
    session_start(); //inicializa a sessao
    if (isset($_POST['bt-entrar'])) {
        $login = $_POST['login'];
        $senha = $_POST['senha'];
        echo "Usuário: ".$login; 
        echo "<br>";
        echo "Senha: ".$senha; 
        
        $sql = "SELECT `usuario` FROM `usuarios` WHERE `usuario`='$login'";
        $resultado = $conexao -> query($sql);
      //  $qtd = mysqli_num_rows($resultado);
      //  echo "<br>";

       // echo "qtd: ".$qtd;
        if (mysqli_num_rows($resultado)>0) {
            $sql= "SELECT * FROM `usuarios` WHERE `usuario`='$login' AND `senha`='$senha'";

            $resultado = $conexao -> query($sql);
            if (mysqli_num_rows($resultado)==1){
                header('Location:../pages/pagina.html');
            }
            echo "<br><br> Usuário ou senha estão incorretos.";
        }
    }

?>