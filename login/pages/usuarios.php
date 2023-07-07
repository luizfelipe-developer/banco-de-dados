<?php include "../php/consulta.php"; ?>
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
        <a href="pagina.php">Voltar</a>
        <div id="msg">
            <span>Registros encontrados:  <?php echo "$msg"?></span>
        </div>
        <table>
            <!-- <form action="usuarios.php" method="GET">
                <div class="input-usuario" >
                    <label for="usuario">Quantos usuários você quer visualizar ?</label>
                    <input type="number" name="usuario" id="usuario" min="1    ">
                </div>
                <div class="botao" >
                    <button >pesquisar</button>
                </div>
            </form> -->
            
            <thead>
                <tr id="cabecalho" >
                    <td class = "celula" >CÓDIGO</td>
                    <td class = "celula" >NOME</td>
                    <td class = "celula" >USUÁRIO</td>
                    <td class = "celula" >SENHA</td>
                </tr>
            </thead>
            <tbody>
                <?php while ($dados_usuario = $query->fetch_array()) { ?>        
                  
                <tr>
                    <td> <?php echo $dados_usuario['id'];?></td>
                    <td id = "td-nome"> <?php echo $dados_usuario['nome'];?></td>
                    <td> <?php echo $dados_usuario['usuario'];?></td>
                    <td> <?php echo $dados_usuario['senha'];?></td>
                </tr>
               <?php } ?>
            </tbody>
        </table>
    </div>    
</body>
</html>



