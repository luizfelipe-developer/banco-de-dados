<?php
//MODO UM
$servidor = "localhost"; //servidor local
$usuario = "root"; //usuario do BD
$senha = "root"; //senha
$dbname = "cad_clientes"; //Nome BD

$conexao = mysqli_connect($servidor, $usuario, $senha, $dbname); //tenta estabelecer a conexão
if(!$conexao){
die("Conexão não realizada, erro.".mysqli_connect_error());
//mensagem de erro
}else{
    echo "Conexão Realizada!";
}
/*MODO DOIS*/

?>