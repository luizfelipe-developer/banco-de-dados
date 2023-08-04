<?php include "editar-aluno.php"; ?>
<!DOCTYPE html>
<html lang="pt-BR"> 
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Banco de Dados</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
       
        <h1>Alterar Cadastro</h1>
<!--método GET recebe algum recurso do servidor
//método POST envia dados para o servidor-->
        <form id="form" action="cadastro-aluno.php" method="POST">
            <div class="inputBox">
                <input type="text" name="nome-aluno" id="nome-aluno" required value="<?php echo $nomeAluno; ?>" >
                <label for="nome-aluno">Nome: </label>
            </div>    
            <div class="inputBox">
            <input oninput="mascara(this)" type="text" id="cpf-aluno" name="cpf-aluno" placeholder="Apenas números" value="<?php echo $cpfAluno; ?>" />
                <label for="cpf-aluno">CPF: </label>
            </div>    
            <div class="inputBox">
            <label for="telefone-aluno">Telefone: </label>
          <input type="tel" id="telefone-aluno" name="telefone-aluno"
          maxlength="14 required="" data-js="phone" placeholder="Apenas números" value="<?php echo $telefoneAluno; ?>"  >
            </div>
            <div class="inputBox">
                <input type="text" name="regiao" id="regiao" required value="<?php echo $regiao; ?>" >
                <label for="regiao">Região: </label>
            </div>
            <div class="botao">
                <input type="submit" id="submit" name="update" value="Alterar">
                
                 <a href="index.php"><button class="glow-on-hover" type="button">Voltar</button></a>


            </div>    
            
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