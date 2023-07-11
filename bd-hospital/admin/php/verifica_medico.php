<?php 
    require_once 'conexao.php';
    session_start(); //inicializa a sessao
    if (isset($_POST['bt-entrar'])) {
        $nome = $_POST['nome'];
        $sobrenome = $_POST['sobrenome'];
        $crm = $_POST['crm'];
        $sql = "SELECT `nome` FROM `medico` WHERE `nome`='$nome'";
        $resultado = $conexao -> query($sql);
      //  $qtd = mysqli_num_rows($resultado);
      //  echo "<br>";

       // echo "qtd: ".$qtd;
        if (mysqli_num_rows($resultado)>0) {
            $sql= "SELECT * FROM `medico` WHERE `nome`= '$nome' AND `crm`= '$crm'";

            $resultado = $conexao -> query($sql);
            if (mysqli_num_rows($resultado)==1){
                $dados = mysqli_fetch_array($resultado);
                $_SESSION['online'] = true;
                $_SESSION['nomeUsu'] = $dados['nome'];

                header('Location:../../user/pages/usuarios-medico.php');
            } else {
                header('Location: ../../user/pages/login-medico.html');
            }
        } else {
            header('Location: ../../user/pages/login-medico.html');
        }
        mysqli_close($conexao);
    }

?>