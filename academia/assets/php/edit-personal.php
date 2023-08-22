<?php
    include_once('config.php');

    if(!empty($_GET['cod_personal']))
    {
        $cod_personal = $_GET['cod_personal'];
        $sqlSelect = "SELECT * FROM personal WHERE cod_personal=$cod_personal";
        $result = $conexao->query($sqlSelect);
        if($result->num_rows > 0)
        {
            while($user_data = mysqli_fetch_assoc($result))
            {   
                $nome = $_POST['nome'];
                $endereco = $_POST['endereco'];
                $cref = $_POST['cref'];
                $telefone = $_POST['telefone'];
            }
        }
        else
        {
            header('Location: sistema-personal.php');
        }
    }
    else
    {
        header('Location: sistema-personal.php');
    }
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário | GN</title>
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
    <a href="sistema-aluno.php">Voltar</a>
    <div class="box">
        <form action="saveEdit.php" method="POST">
            <fieldset>
                <legend><b>Editar Cliente</b></legend>
                <br>

               
                <br><br>

                <div class="inputBox">
                    <input type="text" name="nome" id="nome" class="inputUser" required >
                    <label for="nome" class="labelInput">Nome </label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="endereco" id="endereco" class="inputUser" required >
                    <label for="endereco" class="labelInput">Endereco</label>
                </div>
                
                <br><br>
                <div class="inputBox">
                    <input type="text" name="cref" id="cref" class="cref" required >
                    <label for="cref" class="labelInput">CREF</label>
                </div>
                
                <br><br>
                <div class="inputBox">
                <input type="tel" id="telefone-aluno" class="inputUser" name="telefone"
                    maxlength="14" required  data-js="phone" >
                    <label for="telefone-aluno" class="labelInput" >Telefone: </label>
                </div>

                <input type="hidden" name="cod_aluno" value=<?php echo $cod_aluno;?>>
                <input type="submit" name="updatePerso" id="submit">
            </fieldset>
        </form>
    </div>
</body>
<script>
        // MÁSCARA DO TELEFONE
        const formato = {
      phone(value) {
        return value

          .replace(/\D/g, "")

          .replace(/(\d{2})(\d)/, "($1)$2")

          .replace(/(\d{4})(\d)/, "$1-$2")

          .replace(/(\d{4})-(\d)(\d{4})/, "$1$2-$3")

          .replace(/(-\d{4})\d+?$/, "$1");
      },
    };

    document.querySelectorAll("input").forEach(($input) => {
      const field = $input.dataset.js;

      $input.addEventListener(
        "input",
        (e) => {
          e.target.value = formato[field](e.target.value);
        },
        false
      );
    });
    // MÁSCARA DO CPF
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
</script>
</html>