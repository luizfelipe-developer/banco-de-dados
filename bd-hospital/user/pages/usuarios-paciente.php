<?php include "../../admin/php/consultaPaciente.php"; ?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../../cadastro/css/table.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&display=swap" rel="stylesheet">
        <title>Incluir PHP</title>
</head>
<body>
    <div class="container">
        <a href="login-paciente.php">Voltar</a>
        <div>
            <button type="button" id= "ver-tabela" onclick="exibir()"> Visualizar cadastro</button>
            <button type="button" id= "marcar-consulta" > Marcar consulta</button>
        </div>
        <div id="msg">
            <span>Registros encontrados:  <?php echo "$msgP"?></span>
        </div>
        <table style="display:none;" >
            <thead>
                <tr id="cabecalho" >
                    <td class = "celula" >CÓDIGO</td>
                    <td class = "celula" >NOME</td>
                    <td class = "celula" >SOBRENOME</td>
                    <td class = "celula" >ENDEREÇO</td>
                    <td class = "celula" >CIDADE</td>
                    <td class = "celula" >TELEFONE</td>
                    <td class = "celula" >CPF</td>
                </tr>
            </thead>
            <tbody>
                <?php while ($dados_paciente = $queryP->fetch_array()) { ?>        
                  
                <tr>
                    <td> <?php echo $dados_paciente['cod_paciente'];?></td>
                    <td id = "td-nome"> <?php echo $dados_paciente['nome'];?></td>
                    <td> <?php echo $dados_paciente['sobrenome'];?></td>
                    <td> <?php echo $dados_paciente['endereco'];?></td>
                    <td> <?php echo $dados_paciente['cidade'];?></td>
                    <td> <?php echo $dados_paciente['telefone'];?></td>
                    <td> <?php echo $dados_paciente['cpf'];?></td>
                </tr>
               <?php } ?>
            </tbody>
        </table>
    </div>
    <script src="../js/tabela.js"></script>
</body>
</html>




