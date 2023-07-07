
    <!DOCTYPE html>
    <html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/style.css">
        <title>Tela de Login</title>
    </head>
    <body>
        <div class="container">
            <h1>Login</h1>
            <form action="php/verifica_login.php" method="POST">
            <div class="inputBox">
                <label for="login" class="usuario" > Usuário</label>
                <input type="text" name="login" id="login"  required >
            </div>
            <div class="inputBox">
                <label for="senha" class="senha">Senha</label>
                <input type="password" name="senha" id="senha" required >
            </div>

                <button type="submit" name="bt-entrar" id="bt-entrar">Entrar</button>
                <div>
                    Não possui conta? 
                    <a href="pages/cadastro.html">Registre-se</a>
                </div>
            </form>
        </div>
    </body>
    </html>
