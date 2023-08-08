<?php include "consulta-aluno.php"; ?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../css/table.css">
        <title>Incluir PHP</title>
</head>
<body>
    <div class="container">
        <div id="msg">
            <span>Alunos registrados:  <?php echo "$msg"?></span>
        </div>
        <table>
            <thead>
                <tr id="cabecalho" >
                    <td class = "celula" >CÓDIGO</td>
                    <td class = "celula" >NOME</td>
                    <td class = "celula" >CPF</td>
                    <td class = "celula" >TELEFONE</td>
                    <td class = "celula" >ENDEREÇO</td>
                    <td class = "celula" colspan="2">AÇÃO</td>
                </tr>
            </thead>
            <tbody>
                <?php while ($dados_aluno = $query->fetch_array()) {
                    echo "<tr>";
                        echo "<td>" .$dados_aluno["cod_aluno"]."</td>"; 
                        echo "<td id='td-nome'>" .$dados_aluno["nome"]."</td>"; 
                        echo "<td>" .$dados_aluno["cpf"]."</td>"; 
                        echo "<td>" .$dados_aluno["telefone"]."</td>"; 
                        echo "<td>" .$dados_aluno["endereco"]."</td>"; 
                        echo "<td><a href='formEdicao-aluno.php?cod_aluno=$dados_aluno[cod_aluno]' class='td-editar' id='td-edit' >Editar</a></td>"; 
                        echo "<td><a href='delete-aluno.php?cod_aluno=$dados_aluno[cod_aluno]' class='td-editar' id='td-delete' >Deletar</a></td>"; 
                        
                    echo "</tr>";
                 } ?>
            </tbody>
        </table>
    </div>    
</body>
</html>



