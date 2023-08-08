<?php 
include("conexao.php");
include("editar-aluno.php")
//receber as iformações repassadas pelo método POST pelo formulário
$nomeAluno = $_POST['nome-aluno'];
$cpfAluno = $_POST['cpf-aluno'];
$telefoneAluno = $_POST['telefone-aluno'];
$enderecoAluno = $_POST['endereco-aluno'];
//inserir os valores adicionados das variáveis nos campos da tabela cliente do BD
$inserirSql = "UPDATE alunos SET nome='$nomeAluno', cpf='$cpfAluno', telefone='$telefoneAluno', endereco='$enderecoAluno' ";
//sempre que os valores forem do tipo varchar, devem ficar entre 'aspas simples'
//Verificação
if (mysqli_query($conexao, $inserirSql)) {
    echo "Usuário cadastrado!";
} else {
    echo "Usuário não cadastrado. Erro: ".mysqli_connect_error($conexao);
}
//encerrar a conexão, para evitar travamentos no BD
mysqli_close($conexao);
header('Location: ../pages/adm-tela.html');
?>
