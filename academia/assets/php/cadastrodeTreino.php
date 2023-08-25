<?php
    if(isset($_POST['submit']))
    {
        include_once('config.php');
        $cod_personal = $POST['cod_personal'];
        $cod_aluno = $POST['cod_aluno'];
        $segunda = $_POST['segunda'];
        $terca = $_POST['terca'];
        $quarta = $_POST['quarta'];
        $quinta = $_POST['quinta'];
        $sexta = $_POST['sexta'];
        $sabado = $_POST['sabado'];

        

        $inserirSql = "INSERT INTO treinos(segunda, terca, quarta, quinta, sexta, sabado, cod_personal, cod_aluno)
        VALUES ('$segunda', '$terca', '$quarta', '$quinta', '$sexta', '$sábado', '$cod_personal', '$cod_aluno')";

        if (mysqli_query($conexao, $inserirSql)) {
            echo "Usuário cadastrado!";
        } else {
            echo "Usuário não cadastrado. Erro: ".mysqli_connect_error($conexao);
        }
        //encerrar a conexão, para evitar travamentos no BD
        mysqli_close($conexao);
        header('Location: ../pages/tela-personal.html');
    }

?>
