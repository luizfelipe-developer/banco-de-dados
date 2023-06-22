<?php include "conexao.php"; 

    $teste = $_GET['cod_cliente'];
    echo 'O código do cliente é '.$teste;

    if (!empty($_GET['cod_cliente'])) {
        $cod_cliente = $_GET['cod_cliente'];
        $sqlSelect = "SELECT * FROM clientes WHERE cod_cliente = $cod_cliente";
        $resultado = $conexao->query($sqlSelect);
        
        if ($resultado->num_rows > 0) {
            while ($dados_cliente = mysqli_fetch_assoc($resultado)) {
                $nome = $dados_cliente['nome'];
                $cidade = $dados_cliente['cidade'];
                $uf = $dados_cliente['uf'];
                $regiao = $dados_cliente['regiao'];

            }
            print_r($nome);
        }
    }
?>
