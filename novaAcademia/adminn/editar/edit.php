
<?php
    include_once('config.php');

    if(!empty($_GET['cod_aluno']))
    {
        $cod_aluno = $_GET['cod_aluno'];
        $sqlSelect = "SELECT * FROM matricula_aluno WHERE cod_aluno=$cod_aluno";
        $result = $conexao->query($sqlSelect);
        if($result->num_rows > 0)
        {
            while($user_data = mysqli_fetch_assoc($result))
            {   
                $nome = $_POST['nome'];
                $sobrenome = $_POST['sobrenome'];
                $endereco = $_POST['endereco'];
                $CPF = $_POST['CPF'];
                $telefone = $_POST['telefone'];
                $genero = $_POST['genero'];
                $cod_professor = $_POST['cod_professor'];


            }
        }
        else
        {
            header('Location: ../paginas_aluno.php');
        }
    }
    else
    {
        header('Location: ../paginas_aluno.php');
    }
?>


<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>

    <title>MATRICULAR PROFESSOR</title>
    <link rel="stylesheet" href="../../css/header.css">
    <link rel="stylesheet" href="../../css/styles.css">
    <link rel="stylesheet" href="../../css/cadastro.css">
    <link rel="shortcut icon" href="../../img/logo-icon.png" type="image/x-icon">

  </head>
  <body>
   
      <img id="fundo-academia" src="../../img/academia.jpg" alt="">
      
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
              
                        <li><a href="../paginas_aluno.php">VOLTAR</a></li>    
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
                <h3>EDITAR ALUNO</h3>
              </div>
              <form action="saveEdit.php" method="POST" class="formLogin">
                <div class="input">
                  <i class="fa fa-envelope icone"></i>
                  <input type="text" name="nome" id="nome"  placeholder="Nome"  >
                </div>
    
                <div class="input">
                  <i class="fa fa-lock icone"></i>
                  <input type="text" name="sobrenome" id="sobrenome" placeholder="Sobrenome" >
                  <i id="show-password" class="fa fa-eye icone"></i>
                </div>
    
    
                <div class="input">
                  <i class="fa fa-lock icone"></i>
                  <input type="text" name="endereco" id="endereco" placeholder="Endereço" >
                  <i id="show-password" class="fa fa-eye icone"></i>
                </div>
    
    
    
          
    
                <div class="input">
                  <i class="fa fa-lock icone"></i>
                  <input oninput="mascara(this)" type="text" name="CPF" id="CPF" placeholder="CPF">
                  <i id="show-password" class="fa fa-eye icone"></i>
                </div>
    
    
                <div class="input">
                  <i class="fa fa-lock icone"></i>
                  <input type="tel" maxlength="15" onkeyup="handlePhone(event)" name="telefone" id="telefone" placeholder="Telefone"/>
                  <i id="show-password" class="fa fa-eye icone"></i>
                </div>
  
                <br>
                <div class="inputt">
                <p>Genero:</p>
                <input type="radio" id="feminino" name="genero" value="feminino" placeholder="Feminino" >
                <label for="feminino">Feminino</label>
                <input type="radio" id="masculino" name="genero" value="masculino" >
                <label for="masculino">Masculino</label>
                
                <input type="radio" id="outro" name="genero" value="outros" >
                <label for="outro">Outros</label>
                </div>
    
              
                <div class="input">
                  <i class="fa fa-lock icone"></i>
                  <input type="number" name="cod_professor" id="cod_professor" placeholder="Cod_professor" >
                  <i id="show-password" class="fa fa-eye icone"></i>
                </div>
                
          
                <input type="hidden" name="cod_aluno" value=<?php echo $cod_aluno;?>>
                <input type="submit" name="update" id="submit" class="btn btn-login">
               
              </form>
           
        </div>

  </div>
    </div>

</body>

<script>
function mascara(i){
   
   var v = i.value;
   
   if(isNaN(v[v.length-1])){ // impede entrar outro caractere que não seja número
      i.value = v.substring(0, v.length-1);
      return;
   }
   
   i.setAttribute("maxlength", "14");
   if (v.length == 3 || v.length == 7) i.value += ".";
   if (v.length == 11) i.value += "-";

}


const handlePhone = (event) => {
  let input = event.target
  input.value = phoneMask(input.value)
}

const phoneMask = (value) => {
  if (!value) return ""
  value = value.replace(/\D/g,'')
  value = value.replace(/(\d{2})(\d)/,"($1) $2")
  value = value.replace(/(\d)(\d{4})$/,"$1-$2")
  return value
}

</script>

</html>
