
<?php
    session_start();
    //Verificar se a sessâo "online" foi criada
    
    include "conexao.php";
    
    
    if(mysqli_connect_error())
    trigger_error(mysqli_connect_error());

        $sql = "SELECT * FROM `treinos` ";
         $query = $conexao->query($sql);
         $user = $_SESSION['nomeUse'];
        
        $msg = $query->num_rows;
        
    if(!isset($_SESSION['online'])){
    
        header('Location: index.php');
    }else {
        $user = $_SESSION['nomeUsu'];
    }
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>VISUALIZAR TREINOS</title>
    <link rel="stylesheet" href="../../css/header.css">
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
              
                        <li><a href="/academia/professor/treinos/registros.html">VOLTAR</a></li> 
                    </div>
                </ul>
                
              </nav>
              
    </header>
    <br>
    <?php
        echo "<h1>Bem vindo <u>$user</u></h1>";
    ?>
    
    <div class="m-5">
        <table class="table text-white table-bg">
            <thead>
                <tr>
                <th scope="col">COD_ALUNO</th>
                <th scope="col">COD_PERSONAL</th>
                <!-- <th scope="col">NOME</th> -->
                    <th scope="col">SEGUNDA</th>
                    <th scope="col">TERÇA</th>
                    <th scope="col">QUARTA</th>
                    <th scope="col">QUINTA</th>
                    <th scope="col">SEXTA</th>
                    <th scope="col">SÁBADO</th>
                    <th scope="col">...</th>
                </tr>
            </thead>
            <tbody>
         
                      <?php while ($user_data = $query->fetch_array()) {
                        echo "<tr>";
                        echo "<td>".$user_data['cod_aluno']."</td>";
                        echo "<td>".$user_data['cod_personal']."</td>";
                        // echo "<td>".$user_data['nome']."</td>";
                        echo "<td>".$user_data['segunda']."</td>";
                        echo "<td>".$user_data['terca']."</td>";
                        echo "<td>".$user_data['quarta']."</td>";
                        echo "<td>".$user_data['quinta']."</td>";
                        echo "<td>".$user_data['sexta']."</td>";
                        echo "<td>".$user_data['sabado']."</td>";
                        echo "<td>
                        <a class='btn btn-sm btn-primary' href='editarTreino.php?cod_aluno=$user_data[cod_aluno]' title='Editar'>
                            <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-pencil' viewBox='0 0 16 16'>
                                <path d='M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z'/>
                            </svg>
                            </a> 
                            <a class='btn btn-sm btn-danger' href='deleteTreino.php?cod_aluno=$user_data[cod_aluno]' title='Deletar'>
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
</html>