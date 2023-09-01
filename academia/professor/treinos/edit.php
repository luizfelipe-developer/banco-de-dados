<?php
    include_once('conexao.php');
    if(!empty($_GET['cod_aluno']))
    {
        $cod_aluno = $_GET['cod_aluno'];
        $sqlSelect = "SELECT * FROM personal WHERE cod_aluno=$cod_aluno";
        $result = $conexao->query($sqlSelect);
        if($result->num_rows > 0)
        {
            while($user_data = mysqli_fetch_assoc($result))
            {   
                $segunda = $_POST['segunda'];
                $terca = $_POST['terca'];
                $quarta = $_POST['quarta'];
                $quinta = $_POST['quinta'];
                $sexta = $_POST['sexta'];

            }
        }
        else
        {
            header('Location: paginas.php');
        }
    }
    else
    {
        header('Location: paginas.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EDITAR TREINOS</title>
    <link rel="stylesheet" href="../../css/header.css">
    <link rel="stylesheet" href="../../css/styles.css">
    <link rel="stylesheet" href="../../css/cadastro.css">

    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            background-image: linear-gradient(to right, rgb(20, 147, 220), rgb(17, 54, 71));
        }
        .box{
            color: white;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            background-color: rgba(0, 0, 0, 0.6);
            padding: 15px;
            border-radius: 15px;
            width: 20%;
        }
        fieldset{
            border: 3px solid dodgerblue;
        }
        legend{
            border: 1px solid dodgerblue;
            padding: 10px;
            text-align: center;
            background-color: dodgerblue;
            border-radius: 8px;
        }
        .inputBox{
            position: relative;
        }
        .inputUser{
            background: none;
            border: none;
            border-bottom: 1px solid white;
            outline: none;
            color: white;
            font-size: 15px;
            width: 100%;
            letter-spacing: 2px;
        }
        .labelInput{
            position: absolute;
            top: 0px;
            left: 0px;
            pointer-events: none;
            transition: .5s;
        }
        .inputUser:focus ~ .labelInput,
        .inputUser:valid ~ .labelInput{
            top: -20px;
            font-size: 12px;
            color: dodgerblue;
        }
        #data_nascimento{
            border: none;
            padding: 8px;
            border-radius: 10px;
            outline: none;
            font-size: 15px;
        }
        #submit{
            background-image: linear-gradient(to right,rgb(0, 92, 197), rgb(90, 20, 220));
            width: 100%;
            border: none;
            padding: 15px;
            color: white;
            font-size: 15px;
            cursor: pointer;
            border-radius: 10px;
        }
        #submit:hover{
            background-image: linear-gradient(to right,rgb(0, 80, 172), rgb(80, 19, 195));
        }
    </style>
</head>
<body>


<img id="fundo-academia" src="../../img/academia.jpg" alt="">
      
      <header>
        <div id="teste">
          <div class="logo-imagem">
            <a href="../index.html">
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
              
                        <li><a href="paginas.php">VOLTAR</a></li>    

                    </div>
                </ul>
                
              </nav>
              
    </header>
    <div class="contente">
      <div class="page">
        <div class="container">
          <div class="formulario">
            <div class="header">
              <div class="logo">
                <div class="logo-area">
                  <span class="red"></span><span class="big"><img id="logo" src="../../img/logo-icon.png" alt=""></span>
                </div>
              </div>
              <h3>EDITAR TREINOS</h3>
            </div>
            <form action="saveEdit.php" method="POST" class="formLogin">
              
              <div class="input">
                <i class="fa fa-lock icone"></i>
                <input type="text" name="segunda" id="segunda" placeholder="SEGUNDA" >
                <i id="show-password" class="fa fa-eye icone"></i>
              </div>
  
  
              <div class="input">
                <i class="fa fa-lock icone"></i>
                <input type="text" name="terca" id="terca" placeholder="TERÇA" >
                <i id="show-password" class="fa fa-eye icone"></i>
              </div>
  
              <div class="input">
                <i class="fa fa-lock icone"></i>
                <input type="text" name="quarta" id="quarta" placeholder="QUARTA" >
                <i id="show-password" class="fa fa-eye icone"></i>
              </div>
  
              <div class="input">
                <i class="fa fa-lock icone"></i>
                <input type="text" name="quinta" id="quinta" placeholder="QUINTA" >
                <i id="show-password" class="fa fa-eye icone"></i>
              </div>
  
  
              <div class="input">
                <i class="fa fa-lock icone"></i>
                <input type="text" name="sexta" id="sexta" placeholder="SEXTA" >
                <i id="show-password" class="fa fa-eye icone"></i>
              </div>
              <br><br>
              <input type="hidden" name="cod_aluno" value=<?php echo $cod_aluno;?>>      
                <input type="submit" name="update" id="submit">
            </form>
      </div>
</div>
  </div>
</body>
</html>