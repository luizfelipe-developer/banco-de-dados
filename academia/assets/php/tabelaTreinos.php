<?php
    include "conexao.php";
    
    if(mysqli_connect_error())
    trigger_error(mysqli_connect_error());

        $sql = "SELECT * FROM `treinos` ";
        $query = $conexao->query($sql);

        $msg = $query->num_rows;
    
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../cadastro/css/table.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&display=swap" rel="stylesheet">
        <title>Lista de Alunos</title>
</head>
<body>
    <div class="container">
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
                    <td class = "celula" >CÓDIGO Aluno</td>
                    <td class = "celula" >CÓDIGO Personal</td>
                    <td class = "celula" >NOME</td>
                    <td class = "celula" >SEGUNDA</td>
                    <td class = "celula" >TERÇA</td>
                    <td class = "celula" >QUARTA</td>
                    <td class = "celula" >QUINTA</td>
                    <td class = "celula" >SEXTA</td>
                    <td class = "celula" >SÁBADO</td>
                </tr>
            </thead>
            <tbody>
                <?php while ($dados_treino = $query->fetch_array()) { ?>        
                  
                <tr>
                    <td> <?php echo $dados_treino['cod_aluno'];?></td>
                    <td> <?php echo $dados_treino['cod_personal'];?></td>
                    <td id = "td-nome" > <?php echo $dados_treino['nome'];?></td>
                    <td> <?php echo $dados_treino['segunda'];?></td>
                    <td> <?php echo $dados_treino['terca'];?></td>
                    <td> <?php echo $dados_treino['quarta'];?></td>
                    <td> <?php echo $dados_treino['quinta'];?></td>
                    <td> <?php echo $dados_treino['sexta'];?></td>
                    <td> <?php echo $dados_treino['sabado'];?></td>
                    </tr>
               <?php } ?>
            </tbody>
        </table>
    </div>    
</body>
</html>



