
<?php
    session_start();
    //Verificar se a sessâo "online" foi criada
    include "consulta.php";
    if(!isset($_SESSION['online'])){
    
        header('Location: index.php');
    }else {
        $user = $_SESSION['nomeUsu'];
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>CANSULTAR ALUNOS</title>
    <link rel="stylesheet" href="../../css/header.css">
    <link rel="stylesheet" href="../../css/paginas.css">

    <link rel="shortcut icon" href="../../img/logo-icon.png" type="image/x-icon">

    
    <style>
        *{
        margin: 0;
        padding: 0;
        
        }
        body{
            background-image: url(../../img/academia-darkk.jpg);
            background-size: cover;
            background-repeat: no-repeat;
            color: white;
            text-align: center;
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
                <source  media="(max-width:600px )" class="logo-icon" srcset="../../img/logo-icon.png" type="image/png">
              <img id="img" src="../../img/logo-academia.png" alt=""></a>
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
              
                        <li><a href="/academia/professor/sub-pagina.html">VOLTAR</a></li> 
                          

                    </div>
                </ul>
                
              </nav>
              
    </header>
    <br>
    <?php
        echo "<h1>Bem vindo <u>$user</u></h1>";
    ?>
    <br>
    <div class="box-search">
        <input type="search" class="form-control w-25" placeholder="Pesquisar" id="pesquisar">
        <button onclick="searchData()" class="btn btn-primary">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
            </svg>
        </button>
    </div>
    <div class="content read">
        <table class="table text-white table-bg">
            <thead>
                <tr>
                <th scope="col">COD_ALUNO</th>
                    <th scope="col">NOME</th>
                    <th scope="col">SOBRENOME</th>
                    <th scope="col">TELEFONE</th>
                    <th scope="col">GÊNERO</th>
                    <th scope="col">COD_PROFESSOR</th>
                </tr>
            </thead>
            <tbody>
            <?php while ($usuario = $queryp->fetch_array()) { ?>        
                  
                  <tr>
                      <td> <?php echo $usuario['cod_aluno'];?></td>
                      <td id = "td-nome" > <?php echo $usuario['nome'];?></td>
                      <td> <?php echo $usuario['sobrenome'];?></td>
                      <td> <?php echo $usuario['telefone'];?></td>
                      <td> <?php echo $usuario['genero'];?></td>
                      <td> <?php echo $usuario['cod_professor'];?></td>
                   
                  </tr>
                 <?php } ?>
            </tbody>
        </table>
    </div>
</body>
<script>
    var search = document.getElementById('pesquisar');

    search.addEventListener("keydown", function(event) {
        if (event.key === "Enter") 
        {
            searchData();
        }
    });

    function searchData()
    {
        window.location = 'sistema.php?search='+search.value;
    }


    


</script>
</html>