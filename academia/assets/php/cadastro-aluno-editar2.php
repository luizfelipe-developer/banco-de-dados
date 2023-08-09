<?php 
include("conexao.php");
//receber as iformações repassadas pelo método POST pelo formulário
$nome_aluno = $_POST['nome-aluno'];
$cpf_aluno = $_POST['cpf-aluno'];
$telefone_aluno = $_POST['telefone-aluno'];
$endereco_aluno = $_POST['endereco-aluno'];
//inserir os valores adicionados das variáveis nos campos da tabela cliente do BD
$inserirSql = "UPDATE alunos SET nome = '$nome_aluno', cpf = '$cpf_aluno', telefone = '$telefone_aluno', endereco = '$endereco_aluno'";
//sempre que os valores forem do tipo varchar, devem ficar entre 'aspas simples' 
//Verificação
if (mysqli_query($conexao, $inserirSql)) {
    echo "Usuário cadastrado!";
}else{
    echo "Usuário não cadastrado. Erro: ".mysqli_connect_error($conexao);
}
//encerrar a conexão, para evitar travamentos no BD
mysqli_close($conexao);
header('Location: ../pages/adm-tela.html');
?>