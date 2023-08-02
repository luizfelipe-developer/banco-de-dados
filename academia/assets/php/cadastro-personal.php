<?php 
include("conexao.php");
//receber as iformações repassadas pelo método POST pelo formulário
$nomePersonal = $_POST['nome-personal'];
$crefPersonal = $_POST['cref-personal'];
$telefonePersonal = $_POST['telefone-personal'];
$enderecoPersonal = $_POST['endereco-personal'];
//inserir os valores adicionados das variáveis nos campos da tabela cliente do BD
$inserirSql = "INSERT INTO personal(nome, cref, telefone, endereco) VALUES ('$nomePersonal', '$crefPersonal', '$telefonePersonal', '$enderecoPersonal')";
//sempre que os valores forem do tipo varchar, devem ficar entre 'aspas simples'
//Verificação
if (mysqli_query($conexao, $inserirSql)) {
    echo "Usuário cadastrado!";
    header('Location: ../pages/adm-tela.html');
} else {
    echo "Usuário não cadastrado. Erro: ".mysqli_connect_error($conexao);
}
//encerrar a conexão, para evitar travamentos no BD
mysqli_close($conexao);
?>