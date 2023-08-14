<?php
    include 'conexao.php';

    if (isset($_POST['upload'])) {
        //recebendo dados do formulário
        $nome = $_POST['nome'];
        $fotoNome = $_FILES['foto']['name'];
        $fotoTemp = $_FILES['foto']['tmp_name'];
        $fotoCaminho = 'imgs/'.$fotoNome;

        move_uploaded_file($fotoTemp, $fotoCaminho);
        $sql = "INSERT INTO fotos(nome, caminho) VALUES ('$nome', '$fotoNome')";
        mysqli_query($conn, $sql);
        header('location: index.php');
    }
?>