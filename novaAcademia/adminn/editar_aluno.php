<?php
    include "conexao.php";

    $teste = $_GET['cod_aluno'];
    echo 'O nome do aluno é:'.$teste;

    if(!empty($_GET['cod_aluno'])){
        $CPF = $_GET['cod_aluno'];
        $sqlSelect = "UPDATE matricula_alunoaluno 
        SET nome = '$nome', sobrenome = '$sobrenome', CPF = '$CPF', telefone = '$telefone',  genero = '$genero', endereco = '$endereco'";
        $resultado = $conexao->query($sqlSelect);
        
        if($resultado->num_rows > 0){
            while($dados_aluno = mysqli_fetch_assoc($resultado)){
                $nome = $dados_aluno['nome'];
                $sobrenome = $dados_aluno['sobrenome'];
                $endereco = $dados_aluno['endereco'];
                $CPF = $dados_aluno['CPF'];
                $telefone = $dados_aluno['telefone'];
                $genero = $dados_aluno['genero'];
            }
            print_r($cpf);
        }
    }
?>