<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>

  <title>LOGIN ADMINISTRADOR</title>
  <link rel="stylesheet" href="../css/header.css">
  <link rel="stylesheet" href="../css/loginn.css">
  <link rel="shortcut icon" href="../img/logo-icon.png" type="image/x-icon">


</head>
<body>


    <header>
      <div id="teste">
        <div class="logo-imagem">
          <a href="../index.html">
            <picture>
              <source media="(max-width:600px )" class="logo-icon" srcset="../img/nova_logo.png" type="image/png">
              <img id="img" src="../img/nova_logo.png" alt="">
          </a>
          </picture>
        </div>
      </div>
      <nav>
        <ul class="opcoes">
          <!-- CHECKBOX HACK -->
          <input type="checkbox" id="checkbox_toggle" />
          <label for="checkbox_toggle" class="hamburger">&#9776;</label>
          <!-- NAVEGAÇÃO MENUS -->
          <div class="menu">
            <li><a href="../index.html">VOLTAR</a></li>
          </div>
        </ul>
      </nav>
</header>
    


    <form method="post" action="admin_verifica.php" class="form">
      <div class="main-login">
        <div class="left-login">
          <h1>Faça login Admin</h1>
          <img src="../img/ana.svg" class="left-login-image" alt="Astronauta animação">
        </div>
        <div class="right-login">
          <div class="card-login">
            <h1>LOGIN</h1>

            <div class="textfield">
              <label for="usuario">Usuário</label>
              <input type="text" name="usuario" id="usuario" placeholder="Usuário">
            </div>
            <div class="textfield">
              <label for="senha">Senha</label>
              <input type="password" name="senha" id="senha" placeholder="senha">
            </div>
            <input type="submit" name="bt-entrar" value="Login" class="btn-login">
          </div>
        </div>
      </div>

    </form>
    
</body>
</html>