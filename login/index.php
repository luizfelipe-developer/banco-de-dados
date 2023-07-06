
    <!DOCTYPE html>
    <html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/style.css">
        <title>Tela de Login</title>
    </head>
    <body>
        <div class="login-box">
            <h2>Login</h2>
            <form action="php/verifica_login.php" method="POST">
                <label for="login"> Usuário</label>
                <input type="text" name="login" id="login"  required >

                <label for="">Senha</label>
                <input type="password" name="senha" id="senha" required >
                <button type="submit" name="bt-entrar" id="bt-entrar">Entrar</button>
                <div>
                    Não possui conta? <br>
                    <a href="pages/cadastro.html">Registre-se</a>
                </div>
            </form>
        </div>
    </body>
    </html>
