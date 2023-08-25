<?php
    include_once('conexao.php');
    if(!empty($_GET['cod_aluno']))
    {
        $cod_aluno = $_GET['cod_aluno'];
        $sqlSelect = "SELECT * FROM treinos WHERE cod_aluno=$cod_aluno";
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
                $sexta = $_POST['sabado'];

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
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CADASTRAR TREINOS</title>
</head>
<body>
    <div class="container">
        <form action="cadastrarTreino.php" method="POST">
            <br><br>
            <label for="segunda">Segunda - Feira</label>
            <!-- <textarea name="segunda" id="segunda" cols="30" rows="10">Segunda Feira</textarea> -->
            <input type="text" id="segunda" class="segunda" name="segunda">
            <br><br>
            <label for="terca">terca - Feira</label>
            <!-- <textarea name="terca" id="terca" cols="30" rows="10">terca Feira</textarea> -->
            <input type="text" id="terca" class="terca" name="terca">
            <br><br>
            <label for="quarta">quarta - Feira</label>
            <!-- <textarea name="quarta" id="quarta" cols="30" rows="10">quarta Feira</textarea> -->
            <input type="text" id="quarta" class="quarta" name="quarta">
            <br><br>
            <label for="quinta">quinta - Feira</label>
            <!-- <textarea name="quinta" id="quinta" cols="30" rows="10">quinta Feira</textarea> -->
            <input type="text" id="quinta" class="quinta" name="quinta">
            <br><br>
            <label for="sexta">sexta - Feira</label>
            <!-- <textarea name="sexta" id="sexta" cols="30" rows="10">sexta Feira</textarea> -->
            <input type="text" id="sexta" class="sexta" name="sexta">
            <br><br>
            <label for="sabado">sabado - Feira</label>
            <!-- <textarea name="sabado" id="sabado" cols="30" rows="10">sabado Feira</textarea> -->
            <input type="text" id="sabado" class="sabado" name="sabado">
            <br><br>
            <label for="cod_personal">Informe seu codigo</label>    
            <input type="number" name="cod_personal" id="cod_personal">
            <br><br>
            <label for="cod_aluno">Informe o código do aluno</label>
            <input type="number" name="cod_aluno" id="cod_aluno">
            <br><br>
                <input type="submit" name="submit" id="submit" value="cadastrar treino" >
        </form>
    </div>
</body>
</html>