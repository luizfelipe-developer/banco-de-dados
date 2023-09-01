<?php 
include("conexao.php");
//receber as iformações repassadas pelo método POST pelo formulário
$cod_aluno = $_POST['cod_aluno'];
$nome = $_POST['nome'];
$sobrenome = $_POST['sobrenome'];
$telefone = $_POST['telefone'];
$genero = $_POST['genero'];
$cod_professor = $_POST['cod_professor'];

//inserir os valores adicionados das variáveis nos campos da tabela cliente do BD
$inserirSql = "INSERT INTO matricula_aluno(cod_aluno, nome, sobrenome, telefone, genero, cod_professor) 
VALUES ('$cod_aluno', '$nome', '$sobrenome','$telefone', '$genero', '$cod_professor')";
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