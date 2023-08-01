<?php 
include("conexao.php");
//receber as iformações repassadas pelo método POST pelo formulário
$nomeAluno = $_POST['nome-aluno'];
$cpfAluno = $_POST['cpf-aluno'];
$telefoneAluno = $_POST['telefone-aluno'];
$enderecoAluno = $_POST['endereco-aluno'];
//inserir os valores adicionados das variáveis nos campos da tabela cliente do BD
$inserirSql = "INSERT INTO alunos(nome, cpf, telefone, endereco) VALUES ('$nomeAluno', '$cpfAluno', '$telefoneAluno', '$enderecoAluno')";
//sempre que os valores forem do tipo varchar, devem ficar entre 'aspas simples'
//Verificação
if (mysqli_query($conexao, $inserirSql)) {
    echo "Usuário cadastrado!";
} else {
    echo "Usuário não cadastrado. Erro: ".mysqli_connect_error($conexao);
}
//encerrar a conexão, para evitar travamentos no BD
mysqli_close($conexao);

?>