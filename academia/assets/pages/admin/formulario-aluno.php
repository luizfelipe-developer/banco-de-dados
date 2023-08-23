<?php

    if(isset($_POST['submit']))
    {

        include_once('../../php/config.php');
        $nomeAluno = $_POST['nome-aluno'];
        $enderecoAluno = $_POST['endereco-aluno'];
        $CPFAluno = $_POST['CPF'];
        $telefoneAluno = $_POST['telefone-aluno'];
        $generoAluno = $_POST['genero'];

        $result = mysqli_query($conexao, "INSERT INTO alunos(nome, endereco, cpf, telefone, genero)
        VALUES ('$nomeAluno', '$enderecoAluno', '$CPFAluno', '$telefoneAluno', '$generoAluno')");

        header('Location: ../adm-tela.html');
    }

?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CADASTRAR ALUNO</title>
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
            transition: .2s;
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
    <a href="home.php">Voltar</a>
    <div class="box">
        <form action="formulario-aluno.php" method="POST">
            <fieldset>
                <legend><b>Cadastro de Aluno</b></legend>
                <br>
                <div class="inputBox">
                    <input type="text" name="nome-aluno" id="nome-aluno" class="inputUser" required>
                    <label for="nome-aluno" class="labelInput">Nome completo</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="tel" id="telefone-aluno" class="inputUser" name="telefone-aluno"
                    maxlength="14" required  data-js="phone" >
                    <label for="telefone-aluno" class="labelInput" >Telefone: </label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input oninput="mascara(this)" type="text" id="CPF" class="inputUser" name="CPF" requided />
                    <label for="CPF" class="labelInput">CPF</label>
                </div>
                <br><br>
                <p>Sexo:</p>
                <input type="radio" id="feminino" name="genero" value="feminino" required>
                <label for="feminino">Feminino</label>
                <br>
                <input type="radio" id="masculino" name="genero" value="masculino" required>
                <label for="masculino">Masculino</label>
                <br>
                <input type="radio" id="outro" name="genero" value="outro" required>
                <label for="outro">Outro</label>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="endereco-aluno" id="endereco-aluno" class="inputUser" required>
                    <label for="endereco-aluno" class="labelInput">Endereço</label>
                </div>
                <br><br>
                <input type="submit" name="submit" id="submit">
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