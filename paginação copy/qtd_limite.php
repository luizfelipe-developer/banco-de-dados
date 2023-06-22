<?php

$servidor = "localhost"; //servidor local
$usuario = "root"; //usuario do BD
$senha = "root"; //senha
$dbname = "qtd_registro"; //Nome BD

$conexao2 = mysqli_connect($servidor, $usuario, $senha, $dbname);
if(!$conexao2){
    die("Conexão não realizada, erro.".mysqli_connect_error());
}
/*else{
    echo 'Conexão realizada';
}*/

$sql = "SELECT qtd_quantidade FROM `qtd_limite`";

$resultado = $conexao2->query($sql);
$dados = mysqli_fetch_assoc($resultado);

//echo $dados['qtd'];
$limite = $dados['qtd_quantidade'];

/*if(empty($_GET['pagina'])){
    $pagina=1;
}else{
    $pagina = $_GET['pagina'];
}*/

?>