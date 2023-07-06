<?php 
    require_once 'conexao.php';
    session_start(); //inicializa a sessao
    if (isset($_POST['bt-entrar'])) {
        $login = $_POST['login'];
        $senha = $_POST['senha'];
        
        $sql = "SELECT `usuario` FROM `usuarios` WHERE `usuario`='$login'";
        $resultado = $conexao -> query($sql);
      //  $qtd = mysqli_num_rows($resultado);
      //  echo "<br>";

       // echo "qtd: ".$qtd;
        if (mysqli_num_rows($resultado)>0) {
            $sql= "SELECT * FROM `usuarios` WHERE `usuario`='$login' AND `senha`='$senha'";

            $resultado = $conexao -> query($sql);
            if (mysqli_num_rows($resultado)==1){
                $dados = mysqli_fetch_array($resultado);
                $_SESSION['online'] = true;
                $_SESSION['nomeUsu'] = $dados['nome'];

                header('Location:../pages/pagina.php');
            } else {
                header('Location: ../index.php');
            }
        } else {
            header('Location: ../index.php');
        }
        mysqli_close($conexao);
    }

?>