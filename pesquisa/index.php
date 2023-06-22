<?php include "consulta.php"; ?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../cadastro/css/table.css">
        <link rel="stylesheet" href="style.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&display=swap" rel="stylesheet">
<script src="script.js" defer ></script>
    <title>Incluir PHP</title>
    <style>
        input{
            background-color: #eee;
            border: none;
        padding: 10px;
        font-size: 1rem;
        width: 19em;
        border-radius: 1rem;
        
                }

            button {
        background-color: #eee;
        border: none;
        padding: 10px;
        font-size: 1rem;
        width: 9em;
        border-radius: 1rem;
        color: lightcoral;
        box-shadow: 0 0.2rem #dfd9d9;
        cursor: pointer;
        }

        button:active {
        color: white;
        box-shadow: 0 0.2rem #dfd9d9;
        transform: translateY(0.2rem);
        }

        button:hover:not(:disabled) {
        background: #b3093f;
        color: white;
        text-shadow: 0 0.1rem #bcb4b4;
        }

        button:disabled {
        cursor: auto;
        color: grey;
        }
    </style>
</head>
<body>
    <div class="container">
            <div class="input-usuario" >
                <label for="usuario">Qual usuario você quer visualizar ?</label>
                <input type="search" name="" id="pesquisar" placeholder= "Fulano da Silva" >
                <button class="botao" onclick = "pesqRegistro()" id="submit ">pesquisar</button>
            </div>
        <div id="msg">
            <span>Registros encontrados:  <?php echo "$msg"?></span>
        </div>
        <table>
            <thead>
                <tr id="cabecalho" >
                    <td class = "celula" >CÓDIGO</td>
                    <td class = "celula" >NOME</td>
                    <td class = "celula" >UF</td>
                    <td class = "celula" >CIDADE</td>
                    <td class = "celula" >REGIÃO</td>
                </tr>
            </thead>
            <tbody>
                <?php while ($dados_cliente = $query->fetch_array()) { ?>        
                  
                <tr>
                    <td> <?php echo $dados_cliente['cod_cliente'];?></td>
                    <td id = "td-nome" > <?php echo $dados_cliente['nome'];?></td>
                    <td> <?php echo $dados_cliente['uf'];?></td>
                    <td> <?php echo $dados_cliente['cidade'];?></td>
                    <td> <?php echo $dados_cliente['regiao'];?></td>
                </tr>
               <?php } ?>
            </tbody>
        </table>
    </div>    
</body>
</html>



