<?php 
include("conexao.php");
//receber as iformações repassadas pelo método POST pelo formulário
$cod_aluno = $_POST['cod_aluno'];
$segunda = $_POST['segunda'];
$terca = $_POST['terca'];
$quarta = $_POST['quarta'];
$quinta = $_POST['quinta'];
$sexta = $_POST['sexta'];



//inserir os valores adicionados das variáveis nos campos da tabela cliente do BD
$inserirSql = "INSERT INTO personal(cod_aluno, segunda, terca, quarta, quinta, sexta) 
VALUES ('$cod_aluno', '$segunda', '$terca', '$quarta', '$quinta', '$sexta')";
//sempre que os valores forem do tipo varchar, devem ficar entre 'aspas simples'
//Verificação
if (mysqli_query($conexao, $inserirSql)) {
    echo "Usuário cadastrado!";
} else {
    echo "Usuário não cadastrado. Erro: ".mysqli_connect_error($conexao);
}
//encerrar a conexão, para evitar travamentos no BD
mysqli_close($conexao);
header('Location: paginas.php')

?>