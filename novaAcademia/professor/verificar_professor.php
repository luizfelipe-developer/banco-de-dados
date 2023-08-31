<?php 
    require_once 'conexao.php';
    session_start(); //inicializa a sessao
    if (isset($_POST['bt-entrar'])) {
        $nome = $_POST['nome'];
        $sobrenome = $_POST['sobrenome'];
        $cod_professor = $_POST['cod_professor'];
        $sql = "SELECT `nome` FROM `matricula_professor` WHERE `nome`='$nome'";
        $resultado = $conexao -> query($sql);
      //  $qtd = mysqli_num_rows($resultado);
      //  echo "<br>";

       // echo "qtd: ".$qtd;
        if (mysqli_num_rows($resultado)>0) {
            $sql= "SELECT * FROM `matricula_professor` WHERE `nome`= '$nome' AND `cod_professor`= '$cod_professor'";

            $resultado = $conexao -> query($sql);
            if (mysqli_num_rows($resultado)==1){
                $dados = mysqli_fetch_array($resultado);
                $_SESSION['online'] = true;
                $_SESSION['nomeUsu'] = $dados['nome'];
                $_SESSION['idUsu'] = $dados['cod_professor'];

                header('Location: sub-pagina.html');

        }
        else{
            header('Location: ../professor/professor_login.php');
        }
    }
    else{
        header('Location: ../professor/professor_login.php');
    }
}


    
?>