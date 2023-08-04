<?php 
include "conexao.php";

if (!empty($_GET['cod_aluno'])) {
    $cod_aluno = $_GET['cod_aluno'];

    $sqlDelete = "DELETE FROM alunos WHERE cod_aluno = $cod_aluno";
    $resultDelete = $conexao->query($sqlDelete);
}

header('Location: conEdicao-aluno.php');

?>