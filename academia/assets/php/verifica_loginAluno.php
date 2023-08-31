<?php 
    require_once 'conexao.php';
    session_start(); //inicializa a sessao
    if (isset($_GET['bt-aluno'])) {
       $cpf = $_GET['CPF'];
       $cod_aluno = $_GET['cod_aluno'];
       echo"Usuário: ".$cpf."<br>Senha:".$cod_aluno."<br>";
        
        $sql = "SELECT `cpf` FROM `alunos` WHERE `cpf`='$cpf'";
        $resultado = $conexao -> query($sql);
        print_r($resultado);
        $qtd = mysqli_num_rows($resultado);
        echo($qtd);
        
      //  echo "<br>";

        echo "qtd: ".$qtd;
        if (mysqli_num_rows($resultado)>0) {
            $sql= "SELECT * FROM `alunos` WHERE `cpf`='$cpf' AND `cod_aluno`= '$cod_aluno'";

            $resultado = $conexao -> query($sql);
            if (mysqli_num_rows($resultado)==1){
                $dados = mysqli_fetch_array($resultado);
                $_SESSION['online'] = true;
                $_SESSION['nomeUsu'] = $dados['nome'];

                header('Location:../pages/tela-aluno.html');
            } else {
                header('Location: ../../index.html');
            }
        } else {
            header('Location: ../../index.html');
        }
        mysqli_close($conexao);
    }

?>