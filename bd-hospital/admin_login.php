

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de Login</title>
    <link rel="stylesheet" href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css">
   

    <style>
body {
    font-family: 'Inter', sans-serif;
    margin: 0;
    padding: 0;
    color: #023047
}
.page {
    display: flex;
    flex-direction: column;
    align-items: center;
    align-content: center;
    justify-content: center;
    width: 100%;
    height: 100vh;
    background-color: #480ca8;
}
/*Box do Login e Senha */
.formLogin {
    display: flex;
    flex-direction: column;
    background-color: #fff;
    border-radius: 7px;
    padding: 40px;
    box-shadow: 10px 10px 40px rgba(0, 0, 0, 0.4);
    gap: 5px
}
/*Formato do Login e Senha*/
.formLogin input {
    padding: 15px;
    font-size: 14px;
    border: 1px solid #ccc;
    margin-bottom: 20px;
    margin-top: 5px;
    border-radius: 4px;
    transition: all linear 160ms;
    outline: none;
}
/*Borda do input*/
.formLogin input:focus {
    border: 1px solid #f72585;
}
/*Font do Login e senha*/
.formLogin label {
    font-size: 14px;
    font-weight: 600;
}
/*Registre-se*/
.formLogin a {
    display: inline-block;
    margin-bottom: 20px;
    font-size: 17px;
    color: #555;
    transition: all linear 160ms;
}
/*Registre-se*/
.formLogin a:hover {
    color: #f72585;
}

/*Buton de entrar*/
#bt-entrar {
    background-color: #f72585;
    padding: 13px;
    color: #fff;
    font-size: 14px;
    font-weight: 600;
    border: none !important;
    transition: all linear 160ms;
    cursor: pointer;
    margin: 0 !important;

}
/*Buton de entrar*/
#bt-entrar:hover {
    transform: scale(1.05);
    background-color: #ff0676;

}

div {
    position: relative;
 
}
input {
    border-radius: 0;
    padding: 5px;
    margin-bottom: 10px;
    width: 100%;
    box-sizing: border-box;
}
.lnr-eye {
    position: absolute;
    top: 40px;
    right: 10px;
    cursor: pointer;
}
    </style>
   
</head>
<body>
    <div class="page">
        <form action="admin_verifica.php" method="POST" class="formLogin">
            <h2>Login Admin</h2>
            <p>Digite os seus dados de acesso no campo abaixo.</p>


            <label for="usuario">Usuario </label>
            <input type="text" name="usuario" id="ususario" required >
             
        
                <label for="senha">Senha: </label>
                <input type="password" name="senha" id="senha" required >
          
          


         <a href=""><button type="submit" name="bt-entrar" id="bt-entrar">Entrar</button></a>   
            <div id="registrar">
                Não  tem conta?
                <br>
                <a href="registroo.html">Registre-se</a>
            </div>
        </form>

       
    </div>
    
    <script src="olho.js"></script>

</body>
</html>