<?php 
include "conexao.php";
include "formEdicao-aluno.php";    
$nome_aluno = $_POST['nome-aluno'];
$cpf_aluno = $_POST['cpf-aluno'];
$telefone_aluno = $_POST['telefone-aluno'];
$endereco_aluno = $_POST['endereco-aluno'];

if (!empty($_GET['cod_aluno'])) {
    $cod_aluno = $_GET['cod_aluno'];

    $sqlEdit = "UPDATE `alunos` SET `nome`='$nome_aluno',`cpf`='$cpf_aluno',`telefone`='$cpf_aluno',`endereco`='$endereco_aluno' WHERE cod_aluno = $cod_aluno";
    $resultDelete = $conexao->query($sqlEdit);
}

header('Location: conEdicao-aluno.php');

?>