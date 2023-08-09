<?php 
    include "editar_aluno2.php";
?>
<!DOCTYPE html>
<html lang="pt-BR"> 
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Banco de Dados</title>
    <link rel="stylesheet" href="../css/cadastro_personal.css">
</head>
<body>
    <div class="container">
        <h1>Atualizar - Alunos</h1>
<!--método GET recebe algum recurso do servidor
//método POST envia dados para o servidor-->
        <form action="cadastro-aluno-editar2.php" id="form" method="POST">  
            <div class="inputBox">
                <input type="text" name="nome-aluno" id="nome-aluno" required value="<?php echo $nome_aluno ?>">
                <label for="nome-aluno">Nome: </label>
            </div>    
            <div class="inputBox">
                <input oniput="mascara(this)" type="text" name="cpf-aluno" id="cpf-aluno" required value="<?php echo $cpf_aluno ?>">
                <label for="cpf-aluno">CPF:</label>
            </div>
            <div class="inputBox">
                <input type="text" name="telefone-aluno" id="telefone-aluno" required value="<?php echo $telefone_aluno ?>">
                <label for="telefone-aluno">Telefone:</label>
            </div>
            <div class="inputBox">
                <input type="text" name="endereco-aluno" id="endereco-aluno" required value="<?php echo $endereco_aluno ?>">
                <label for="endereco-aluno">Endereço:</label>
            </div>
            <div class="botao">
                <a href="">
                    <button class="cadastrar" name="bt-cadastrar">Atualizar</button>
                </a>
            </div>
            
        </form>
        <script>
        function mascara(i){
   
            var v = i.value;
            
            if(isNaN(v[v.length-1])){ // impede entrar outro caractere que não seja número
                i.value = v.substring(0, v.length-1);
                return;
            }
            
            i.setAttribute("maxlength", "14");
            if (v.length == 3 || v.length == 7) i.value += ".";
            if (v.length == 11) i.value += "-";

            }
        </script>
    </div>
</body>
</html>