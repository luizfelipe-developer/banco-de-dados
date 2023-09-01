<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
   
    <title>LOGIN PERSONAL</title>
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
              <source  media="(max-width:600px )" class="logo-icon" srcset="../img/logo-icon.png" type="image/png">
            <img id="img" src="../img/logo-academia.png" alt=""></a>
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

  <form method="post" action="verificar_professor.php" class="form">

<div class="main-login">
        <div class="left-login">
            <h1>Faça login Personal</h1>
            <img src="../img/personal.svg" class="left-login-image" alt="Astronauta animação">
        </div>
        <div class="right-login">
            <div class="card-login">
                <h1>LOGIN</h1>

                <div class="textfield">
                    <label for="cod_professor">Cod_professor</label>
                    <input type="number" name="cod_professor" id="cod_professor" placeholder="Cod_professor">
                </div>
                <div class="textfield">
                    <label for="nome">Nome</label>
                    <input type="text" name="nome" id="nome" placeholder="Nome">
                </div>
                <input type="submit" name="bt-entrar" value="Login" class="btn-login">
              </form>
            </div>
        </div>
    </div>