<?php
    require_once 'conexao.php';
    
    if(mysqli_connect_error())
    trigger_error(mysqli_connect_error());


        
        $sql = "SELECT * FROM `medico` WHERE `nome` = 'nome' AND `crm` = 'crm' ";
        $query = $conexao->query($sql);

        $msg = $query->num_rows;
        session_start(); //inicializa a sessao
        if (isset($_POST['bt-entrar'])) {
            $nome = $_POST['nome'];
            $crm = $_POST['crm'];
            
            $sql = "SELECT `usuario` FROM `usuarios` WHERE `nome`='$nome'";
            $resultado = $conexao -> query($sql);
          //  $qtd = mysqli_num_rows($resultado);
          //  echo "<br>";
    
           // echo "qtd: ".$qtd;
            if (mysqli_num_rows($resultado)>0) {
                $sql= "SELECT * FROM `medico` WHERE `nome`='$nome' AND `crm`= '$crm'";
    
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