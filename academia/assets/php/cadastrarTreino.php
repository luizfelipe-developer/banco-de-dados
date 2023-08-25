<?php 
include("conexao.php");
//receber as iformações repassadas pelo método POST pelo formulário
$cod_aluno = $_POST['cod_aluno'];
$cod_personal = $_POST['cod_personal'];
$segunda = $_POST['segunda'];
$terca = $_POST['terca'];
$quarta = $_POST['quarta'];
$quinta = $_POST['quinta'];
$sexta = $_POST['sexta'];
$sabado = $_POST['sabado'];



//inserir os valores adicionados das variáveis nos campos da tabela cliente do BD
$inserirSql = "INSERT INTO treinos(cod_aluno, cod_personal, segunda, terca, quarta, quinta, sexta, sabado) 
VALUES ('$cod_aluno', '$cod_personal', '$segunda', '$terca', '$quarta', '$quinta', '$sexta', '$sabado')";
//sempre que os valores forem do tipo varchar, devem ficar entre 'aspas simples'
//Verificação
if (mysqli_query($conexao, $inserirSql)) {
    echo "Usuário cadastrado!";
} else {
    echo "Usuário não cadastrado. Erro: ".mysqli_connect_error($conexao);
}
//encerrar a conexão, para evitar travamentos no BD
mysqli_close($conexao);
header('Location: ../pages/tela-personal.html');

?>