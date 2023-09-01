
<?php
    session_start();
    //Verificar se a sessâo "online" foi criada
    include "consulta_aluno.php";
    if(!isset($_SESSION['online'])){
    
        header('Location: index.php');
    }else {
        $user = $_SESSION['nomeUsu'];
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>VISUALIZAR REGISTRO</title>
    <link rel="stylesheet" href="../../css/header.css">
    <link rel="stylesheet" href="../../css/paginas.css">
    <link rel="shortcut icon" href="../../img/logo-icon.png" type="image/x-icon">

    <style>
        body{
            background-image: url(../../img/academia-darkk.jpg);
            background-size: cover;
            background-repeat: no-repeat;
            
            color: white;
            text-align: center;
        }
        .table-bg{
            width: 80%;
            margin: 0 auto;
    background-color: #fff;       
     border-radius: 15px 15px 0 0;
        }

        th{
        color: black;
        }

        td{
        color: black;
        }

        h1{
        margin-top: 100px;
        }

        .box-search{
            display: flex;
            justify-content: center;
            gap: .1%;
        }
    </style>
</head>
<body>
<header>
        <div id="teste">
          <div class="logo-imagem">
            <a href="../../index.html">
              <picture>
                <source  media="(max-width:600px )" class="logo-icon" srcset="../../img/nova_logo.png" type="image/png">
              <img id="img" src="../../img/nova_logo.png" alt=""></a>
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
              
                        <li><a href="/academia/alunos/sub-pagina.html">VOLTAR</a></li> 
                    </div>
                </ul>
                
              </nav>
              
    </header>
    <br>
    <?php
        echo "<h1>Bem vindo <u>$user</u></h1>";
    ?>
    
    <div class="content read">
        <table class="table text-white table-bg">
            <thead>
                <tr>
                <th scope="col">COD_ALUNO</th>
                    <th scope="col">NOME</th>
                    <th scope="col">SOBRENOME</th>
                    <th scope="col">ENDEREÇO</th>
                    <th scope="col">CPF</th>
                    <th scope="col">TELEFONE</th>
                    <th scope="col">GÊNERO</th>
                </tr>
            </thead>
            <tbody>
            <?php while ($usuario = $queryp->fetch_array()) { ?>        
                  
                  <tr>
                      <td> <?php echo $usuario['cod_aluno'];?></td>
                      <td id = "td-nome" > <?php echo $usuario['nome'];?></td>
                      <td> <?php echo $usuario['sobrenome'];?></td>
                      <td> <?php echo $usuario['endereco'];?></td>
                      <td> <?php echo $usuario['CPF'];?></td>
                      <td> <?php echo $usuario['telefone'];?></td>
                      <td> <?php echo $usuario['genero'];?></td>
                   
                  </tr>
                 <?php } ?>
            </tbody>
        </table>
    </div>
</body>
</html>