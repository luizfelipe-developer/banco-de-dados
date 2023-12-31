<?php
    session_start();
    include_once('config.php');
    // print_r($_SESSION);
    if((!isset($_SESSION['usuario']) == true) and (!isset($_SESSION['senha']) == true))
    {
        unset($_SESSION['usuario']);
        unset($_SESSION['senha']);
    }
    if(!empty($_GET['search']))
    {
        $data = $_GET['search'];
        $sql = "SELECT * FROM matricula_aluno WHERE cod_aluno LIKE '%$data%' or nome LIKE '%$data%' or CPF LIKE '%$data%' ORDER BY cod_aluno DESC";
    }
    else
    {
        $sql = "SELECT * FROM matricula_aluno ORDER BY cod_aluno DESC";
    }
    $result = $conexao->query($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>CONSULTAR ALUNO</title>
    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="../css/paginas.css">
    <link rel="shortcut icon" href="../img/logo-icon.png" type="image/x-icon">

    <style>
        body{
            background-image: url(../img/academia-darkk.jpg);
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

        
        tr:hover {
          background-color: #376ab7;
        }

        tr:hover td {
        	color: #FFFFFF;
        }
    </style>
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
              
                        <li><a href="/academia/adminn/registro_aluno.html">VOLTAR</a></li> 
                          

                    </div>
                </ul>
                
              </nav>
              
    </header>
    <br>
    <?php
        echo "<h1>Bem vindo <u>$logado</u></h1>";
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
                    <th scope="col">ENDEREÇO</th>
                    <th scope="col">CPF</th>
                    <th scope="col">TELEFONE</th>
                    <th scope="col">GÊNERO</th>
                    <th scope="col">COD_PROFESSOR</th>
                    <th scope="col">...</th>



                </tr>
            </thead>
            <tbody>
                <?php
                    while($user_data = mysqli_fetch_assoc($result)) {
                        echo "<tr>";
                        echo "<td>".$user_data['cod_aluno']."</td>";
                        echo "<td>".$user_data['nome']."</td>";
                        echo "<td>".$user_data['sobrenome']."</td>";
                        echo "<td>".$user_data['endereco']."</td>";
                        echo "<td>".$user_data['CPF']."</td>";
                        echo "<td>".$user_data['telefone']."</td>";
                        echo "<td>".$user_data['genero']."</td>";
                        echo "<td>".$user_data['cod_professor']."</td>";


                     

                        echo "<td>
                        <a class='btn btn-sm btn-primary' href='editar/edit.php?cod_aluno=$user_data[cod_aluno]' title='Editar'>
                            <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-pencil' viewBox='0 0 16 16'>
                                <path d='M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z'/>
                            </svg>
                            </a> 
                            <a class='btn btn-sm btn-danger' href='editar/delete.php?cod_aluno=$user_data[cod_aluno]' title='Deletar'>
                                <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-trash-fill' viewBox='0 0 16 16'>
                                    <path d='M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z'/>
                                </svg>
                            </a>
                            </td>";
                        echo "</tr>";
                    }
                    ?>
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
        window.location = 'paginas.php?search='+search.value;
    }
</script>
</html>