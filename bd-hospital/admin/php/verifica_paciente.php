<?php 
    require_once 'conexao.php';
    session_start(); //inicializa a sessao
    if (isset($_POST['bt-entrar'])) {
        $nomeP = $_POST['nomeP'];
        $sobrenomeP = $_POST['sobrenomeP'];
        $cpf = $_POST['cpf'];
        $sql = "SELECT `nome` FROM `paciente` WHERE `nome`='$nomeP'";
        $resultado = $conexao -> query($sql);
      //  $qtd = mysqli_num_rows($resultado);
      //  echo "<br>";

       // echo "qtd: ".$qtd;
        if (mysqli_num_rows($resultado)>0) {
            $sql= "SELECT * FROM `paciente` WHERE `nome`= '$nomeP' AND `cpf`= '$cpf'";

            $resultado = $conexao -> query($sql);
            if (mysqli_num_rows($resultado)==1){
                $dadosP = mysqli_fetch_array($resultado);
                $_SESSION['online'] = true;
                $_SESSION['nomeUsu'] = $dadosP['nome'];

                header('Location:../../user/pages/usuarios-paciente.php');
            } else {
                header('Location: ../../user/pages/login-paciente.php');
            }
        } else {
            header('Location: ../../user/pages/login-paciente.php');
        }
        mysqli_close($conexao);
    }

?>