<?php include "consultaAluno.php"; ?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../cadastro/css/table.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&display=swap" rel="stylesheet">
        <title>Incluir PHP</title>
</head>
<body>
    <div class="container">
        <div id="msg">
            <span>Registros encontrados:  <?php echo "$msg"?></span>
        </div>
        <table>
            <thead>
                <tr id="cabecalho" >
                    <td class = "celula" >CÓDIGO</td>
                    <td class = "celula" >NOME</td>
                    <td class = "celula" >CPF</td>
                    <td class = "celula" >TELEFONE</td>
                    <td class = "celula" >ENDEREÇO</td>
                    <td class = "celula" >GÊNERO</td>
                </tr>
            </thead>
            <tbody>
                <?php while ($dados_aluno = $query->fetch_array()) { ?>        
                  
                <tr>
                    <td> <?php echo $dados_aluno['cod_aluno'];?></td>
                    <td id = "td-nome" > <?php echo $dados_aluno['nome'];?></td>
                    <td> <?php echo $dados_aluno['cpf'];?></td>
                    <td> <?php echo $dados_aluno['telefone'];?></td>
                    <td> <?php echo $dados_aluno['endereco'];?></td>
                    <td> <?php echo $dados_aluno['genero'];?></td>
                </tr>
               <?php } ?>
            </tbody>
        </table>
    </div>    
</body>
</html>



