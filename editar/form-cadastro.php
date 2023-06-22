<?php include "editar.php"; ?>
<!DOCTYPE html>
<html lang="pt-BR"> 
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Banco de Dados</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
       
        <h1>Alterar Cadastro</h1>
<!--método GET recebe algum recurso do servidor
//método POST envia dados para o servidor-->
        <form id="form" action="cadastro.php" method="POST">
            <div class="inputBox">
                <input type="text" name="nome" id="nome" required value="<?php echo $nome; ?>" >
                <label for="nome">Nome: </label>
            </div>    
            <div class="inputBox">
                <input type="text" name="cidade" id="cidade" required value="<?php echo $cidade; ?>" >
                <label for="cidade">Cidade: </label>
            </div>    
            <div class="inputBox">
                <input type="text" name="uf" id="uf" required value="<?php echo $uf; ?>" >
                <label for="uf">UF: </label>
            </div>
            <div class="inputBox">
                <input type="text" name="regiao" id="regiao" required value="<?php echo $regiao; ?>" >
                <label for="regiao">Região: </label>
            </div>
            <div class="botao">
                <input type="submit" id="submit" name="update" value="Alterar">
                
                 <a href="index.php"><button class="glow-on-hover" type="button">Voltar</button></a>


            </div>    
            
        </form>
    </div>
</body>
</html>