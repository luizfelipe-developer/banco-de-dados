<?php 
include("conexao.php");
//receber as iformações repassadas pelo método POST pelo formulário
$nome = $_POST['nome'];
$email = $_POST['email'];
$cidade = $_POST['cidade'];
$uf = $_POST['uf'];
//inserir os valores adicionados das variáveis nos campos da tabela cliente do BD
$inserirSql = "INSERT INTO cliente(nome, email, cidade, uf) VALUES ('$nome', '$email', '$cidade', '$uf')";
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