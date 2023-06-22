<?php include "consulta.php"; ?>
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
    <style>

    input{
    background-color: #eee;
    border: none;
    padding: 15px;
    font-size: 1rem;
    width: 19em;
    border-radius: 1rem;
        
    }

    .glow-on-hover {
    width: 220px;
    height: 50px;
    border: none;
    outline: none;
    color: #fff;
    background: #111;
    cursor: pointer;
    position: relative;
    z-index: 0;
    border-radius: 10px;
    }

    .glow-on-hover:before {
    content: '';
    background: linear-gradient(45deg, #ff0000, #ff7300, #fffb00, #48ff00, #00ffd5, #002bff, #7a00ff, #ff00c8, #ff0000);
    position: absolute;
    top: -2px;
    left:-2px;
    background-size: 400%;
    z-index: -1;
    filter: blur(5px);
    width: calc(100% + 4px);
    height: calc(100% + 4px);
    animation: glowing 20s linear infinite;
    opacity: 0;
    transition: opacity .3s ease-in-out;
    border-radius: 10px;
    }

    .glow-on-hover:active {
    color: #000
    }

    .glow-on-hover:active:after {
    background: transparent;
    }

    .glow-on-hover:hover:before {
    opacity: 1;
    }

    .glow-on-hover:after {
    z-index: -1;
    content: '';
    position: absolute;
    width: 100%;
    height: 100%;
    background: #111;
    left: 0;
    top: 0;
    border-radius: 10px;
    }

    @keyframes glowing {
    0% { background-position: 0 0; }
    50% { background-position: 400% 0; }
    100% { background-position: 0 0; }
    }
    </style>
</head>
<body>
    <div class="container">
        <div id="msg">
            <span>Registros encontrados:  <?php echo "$msg"?></span>
        </div>

        <form action="novo_limite.php" method="POST">
            <legend>Quantidade de Registros:</legend>
            <input type="text" name="input_qtd" id="input_qtd" value="<?php echo $limite ?>">
            <input type="submit" value="Enviar" name="update">
        </form>
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
        <div>
            <a href="?pagina=1"> primeira </a>
            <a href="?pagina=<?= $pagina-1 ?>">  <<  </a>
            <?= $pagina ?>
            <a href="?pagina=<?= $pagina+1 ?>">  >>  </a>
            <a href="?pagina=<?= $paginafim ?>"> ultima </a>
        </div>
    </div>    
</body>
</html>



