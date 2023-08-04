<?php include "conexao.php"; 

    $teste = $_GET['cod_aluno'];
    echo 'O código do aluno é '.$teste;

    if (!empty($_GET['cod_aluno'])) {
        $cod_aluno = $_GET['cod_aluno'];
        $sqlSelect = "SELECT * FROM alunos WHERE cod_aluno = $cod_aluno";
        $resultado = $conexao->query($sqlSelect);
        
        if ($resultado->num_rows > 0) {
            while ($dados_aluno = mysqli_fetch_assoc($resultado)) {
                $nomeAluno = $dados_aluno['nome'];
                $cpfAluno = $dados_aluno['cpf'];
                $telefoneAluno = $dados_aluno['telefone'];
                $enderecoAluno = $dados_aluno['endereco'];
            }
            print_r($nomeAluno);
        }
    }
?>
