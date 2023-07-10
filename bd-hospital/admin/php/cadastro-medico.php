<?php 
include("conexao.php");
//receber as iformações repassadas pelo método POST pelo formulário
$nome = $_POST['nome'];
$sobrenome = $_POST['sobrenome'];
$crm = $_POST['crm'];
$endereco = $_POST['endereco'];
$cidade = $_POST['cidade'];
$especialidade = $_POST['especialidade'];
//inserir os valores adicionados das variáveis nos campos da tabela cliente do BD
$inserirSql = "INSERT INTO medico(crm, nome, sobrenome, endereco, cidade, especialidade) VALUES ('$crm', '$nome', '$sobrenome', '$endereco', '$cidade', '$especialidade')";
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