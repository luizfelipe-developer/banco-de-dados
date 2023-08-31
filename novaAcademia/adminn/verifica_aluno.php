<?php 
    require_once 'conexao.php';
    session_start(); //inicializa a sessao
    if (isset($_POST['bt-entrarr'])) {
        $nome = $_POST['nome'];
        $sobrenome = $_POST['sobrenome'];
        $cod_aluno = $_POST['cod_aluno'];
        $sql = "SELECT `nome` FROM `matricula_aluno` WHERE `nome`='$nome'";
        $resultado = $conexao -> query($sql);
      //  $qtd = mysqli_num_rows($resultado);
      //  echo "<br>";

       // echo "qtd: ".$qtd;
        if (mysqli_num_rows($resultado)>0) {
            $sql= "SELECT * FROM `matricula_aluno` WHERE `nome`= '$nome' AND `cod_aluno`= '$cod_aluno'";

            $resultado = $conexao -> query($sql);
            if (mysqli_num_rows($resultado)==1){
                $dados = mysqli_fetch_array($resultado);
                $_SESSION['online'] = true;
                $_SESSION['nomeUsu'] = $dados['nome'];
                $_SESSION['idUsu'] = $dados['cod_aluno'];

                header('Location: paginas_aluno.php');

        }
        else{
            header('Location: paginas_aluno.php');
        }
    }
    else{
        header('Location: paginas_aluno.php');
    }
}


    
?>