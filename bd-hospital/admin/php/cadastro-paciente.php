<?php 
include("conexao.php");
//receber as iformações repassadas pelo método POST pelo formulário
$nomeP = $_POST['nomeP'];
$sobrenomeP = $_POST['sobrenomeP'];
$enderecoP = $_POST['enderecoP'];
$cidadeP = $_POST['cidadeP'];
$telefoneP = $_POST['telefoneP'];
$cpfP = $_POST['cpf'];
//inserir os valores adicionados das variáveis nos campos da tabela cliente do BD
$inserirSql = "INSERT INTO paciente(nome, sobrenome, endereco, cidade, telefone, cpf) VALUES ('$nomeP', '$sobrenomeP', '$enderecoP', '$cidadeP', '$telefoneP', '$cpfP')";
//sempre que os valores forem do tipo varchar, devem ficar entre 'aspas simples'
//Verificação
if (mysqli_query($conexao, $inserirSql)) {
    echo "Usuário cadastrado!";
} else {
    echo "Usuário não cadastrado. Erro: ".mysqli_connect_error($conexao);
}
//encerrar a conexão, para evitar travamentos no BD
mysqli_close($conexao);
header('Location: ../../index.html');
?>