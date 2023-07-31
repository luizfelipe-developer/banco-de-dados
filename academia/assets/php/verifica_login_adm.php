<?php 
    require_once 'conexao.php';
    session_start(); //inicializa a sessao
    if (isset($_GET['bt-adm'])) {
       $usuario = $_GET['usuario'];
       $senha = $_GET['senha'];
       echo"Usuário: ".$usuario."<br>Senha:".$senha."<br>";
        
        $sql = "SELECT `usuario` FROM `secretaria` WHERE `usuario`='$usuario'";
        $resultado = $conexao -> query($sql);
        print_r($resultado);
        $qtd = mysqli_num_rows($resultado);
        echo($qtd);
        
      //  echo "<br>";

        echo "qtd: ".$qtd;
        if (mysqli_num_rows($resultado)>0) {
            $sql= "SELECT * FROM `secretaria` WHERE `usuario`='$usuario' AND `senha`= '$senha'";

            $resultado = $conexao -> query($sql);
            if (mysqli_num_rows($resultado)==1){
                $dados = mysqli_fetch_array($resultado);
                $_SESSION['online'] = true;
                $_SESSION['nomeUsu'] = $dados['nome'];

                header('Location:../pages/adm-tela.html');
            } else {
                header('Location: ../../index.html');
            }
        } else {
            header('Location: ../../index.html');
        }
        mysqli_close($conexao);
    }

?>