<!DOCTYPE html>
<html lang="pt-BR"> 
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="../css/style.css"> -->
    <title>LOGIN DE PACIENTE</title>
    
</head>
<body>
    <div class="container">
        <a href="../login-tela.html">Voltar</a>
        <h1>Entrar como paciente</h1>
<!--método GET recebe algum recurso do servidor
//método POST envia dados para o servidor-->
        <form id="form" action="../../admin/php/verifica_paciente.php" method="POST">
            <div class="inputBox nome">
                <label for="nomeP">Nome: </label>
                <input type="text" name="nomeP" id="nome" required >
            </div>    
            <div class="inputBox sobrenome">
                <label for="sobrenomeP">Sobrenome: </label>
                <input type="text" name="sobrenomeP" id="sobrenome" required >
            </div>    
            <div class="inputBox crm">
                <label for="cpf">CPF: </label>
                <input oninput="mascara(this)" type="text" name="cpf" id="cpf" required>
            </div>    
            <div class="botao">
                <button type="submit" name="bt-entrar" id="bt-entrar">Entrar</button>
            </div> 
        </form>
    </div>
</body>
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
</html>