<?php 
    require_once 'conexao.php';
    session_start(); //inicializa a sessao
    if (isset($_GET['bt-personal'])) {
       $crefPersonal = $_GET['crefPersonal'];
       $pers_id = $_GET['pers_id'];
       echo"Usuário: ".$crefPersonal."<br>Senha:".$pers_id."<br>";
        
        $sql = "SELECT `cod_personal` FROM `personal` WHERE `cod_personal`='$pers_id'";
        $resultado = $conexao -> query($sql);
        print_r($resultado);
        $qtd = mysqli_num_rows($resultado);
        echo($qtd);
        
      //  echo "<br>";

        echo "qtd: ".$qtd;
        if (mysqli_num_rows($resultado)>0) {
            $sql= "SELECT * FROM `personal` WHERE `cref`='$crefPersonal' AND `cod_personal`= '$pers_id'";

            $resultado = $conexao -> query($sql);
            if (mysqli_num_rows($resultado)==1){
                $dados = mysqli_fetch_array($resultado);
                $_SESSION['online'] = true;
                $_SESSION['nomeUsu'] = $dados['nome'];

                header('Location:../pages/tela-personal.html');
            } else {
                header('Location: ../../index.html');
            }
        } else {
            header('Location: ../../index.html');
        }
        mysqli_close($conexao);
    }

?>