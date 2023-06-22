<?php 
include "conexao.php";

if (!empty($_GET['cod_cliente'])) {
    $cod_cliente = $_GET['cod_cliente'];

    $sqlDelete = "DELETE FROM clientes WHERE cod_cliente = $cod_cliente";
    $resultDelete = $conexao->query($sqlDelete);
}
header('location: index.php');

?>