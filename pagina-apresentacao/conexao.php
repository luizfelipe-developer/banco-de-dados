<?php
//MODO UM
$servername = "localhost"; //servidor local
$username = "root"; //usuario do BD
$password = "root"; //senha
$dbname = "usuario_imagens"; //Nome BD

$conn = mysqli_connect($servername, $username, $password, $dbname); //tenta estabelecer a conexão
if(!$conn){
    die("Conexão não realizada, erro." . mysqli_connect_error());
}
?>