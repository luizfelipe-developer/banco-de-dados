<?php 
include("conexao.php");
//receber as iformações repassadas pelo método POST pelo formulário
$nome = $_POST['nome'];
$cod_aluno = $_POST['cod_aluno'];
$sobrenome = $_POST['sobrenome'];
$endereco = $_POST['endereco'];
$CPF = $_POST['CPF'];
$telefone = $_POST['telefone'];
$genero = $_POST['genero'];



//inserir os valores adicionados das variáveis nos campos da tabela cliente do BD
$inserirSql = "INSERT INTO matricula_aluno(cod_aluno, nome, sobrenome, endereco, CPF, telefone, genero) 
VALUES ('$cod_aluno', '$nome', '$sobrenome', '$endereco', '$CPF', '$telefone', '$genero')";
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