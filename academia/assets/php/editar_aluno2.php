<?php
    include "conexao.php";

    $teste = $_GET['cod_aluno'];
    echo 'O código do aluno é:'.$teste;

    if(!empty($_GET['cod_aluno'])){
        $cod_aluno = $_GET['cod_aluno'];
        $sqlSelect = "UPDATE alunos SET nome = '$nome', cpf = '$cpf', telefone = '$telefone', endereco = '$endereco' WHERE cod_aluno = '$teste' ";
        $resultado = $conexao->query($sqlSelect);
        
        if($resultado->num_rows > 0){
            while($dados_aluno = mysqli_fetch_assoc($resultado)){
                $nome = $dados_aluno['nome'];
                $cpf = $dados_aluno['cpf'];
                $telefone = $dados_aluno['telefone'];
                $endereco = $dados_aluno['endereco'];
            }
            print_r($cod_aluno);
        }
    }
?>