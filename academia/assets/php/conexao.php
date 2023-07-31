<?php
//MODO UM
$servidor = "localhost"; //servidor local
$usuario = "root"; //usuario do BD
$senha = "root"; //senha
$dbname = "academiafit"; //Nome BD

$conexao = mysqli_connect($servidor, $usuario, $senha, $dbname); //tenta estabelecer a conexão
if(!$conexao){
die("Conexão não realizada, erro.".mysqli_connect_error());

}/*else{
    echo "Conexão Realizada!";
}*/
?>