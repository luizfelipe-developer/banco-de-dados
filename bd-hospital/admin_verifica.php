<?php 
    require_once 'conexao.php';
    session_start(); //inicializa a sessao
    if (isset($_POST['bt-entrar'])) {

        $usuario = $_POST['usuario'];
        $senha = $_POST['senha'];
        $sql = "SELECT `usuario` FROM `admin` WHERE `usuario`='$usuario'";
        $resultado = $conexao -> query($sql);
      //  $qtd = mysqli_num_rows($resultado);
      //  echo "<br>";

       // echo "qtd: ".$qtd;
        if (mysqli_num_rows($resultado)>0) {
            $sql= "SELECT * FROM `admin` WHERE `usuario`= '$usuario' AND `senha`= '$senha'";

            $resultado = $conexao -> query($sql);
            if (mysqli_num_rows($resultado)==1){
                $dados = mysqli_fetch_array($resultado);
                $_SESSION['online'] = true;
                $_SESSION['nomeUsu'] = $dados['nome'];
                $_SESSION['idUsu'] = $dados['id'];

                header('Location: tela-adm.html');

        }
        else{
            header('Location: tela-adm.html');
        }
    }
    else{
        header('Location: tela-adm.html');
    }
}


    
?>