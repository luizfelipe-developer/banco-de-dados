<?php
    session_start();
    //Verificar se a sessâo "online" foi criada
    include "consulta.php";
    if(!isset($_SESSION['online'])){
    
       
    }else {
        $user = $_SESSION['nomeUsu'];
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>

*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Roboto', sans-serif;
}
.container{
    max-width: 180vh;
    margin: 20px auto 0;
}
#msg{
    margin: 10px;
}
table{
    margin-bottom: 70px;
    width: 100%;
    border-collapse: collapse;
    background-color: whitesmoke;
}
#cabecalho{
    background-color: #b3093f;
    color: #fff;
    text-align: center;
    font-size: 1.2rem;
    font-weight: 700;
}
.celula{
    padding: 10px 20px;
    border-left: 1px solid #fff;
    border-right: 1px solid #fff;
}
tr{
    text-align: center;
    border-bottom: 1px solid #bbb;
}
tbody tr td{
    padding: 7px;
}
#td-nome{
    text-align: left;
}
 

    </style>
</head>
<body>
    <div class="container">
        <h1>Olá,
            <?php
            echo $user;
            ?>
            , Você está logado.</h1>
            <br>
            <br>
            <div id="msg">
            <span>Registros encontrados Medico:  <?php echo "$msg"?></span>
        </div>
        <table>
          
            
            <thead>
                <tr id="cabecalho" >
                    <td class = "celula" >cod_aluno</td>
                    <td class = "celula" >nome</td>
                    <td class = "celula" >sobrenome</td>
                    <td class = "celula" >endereco</td>
                    <td class = "celula" >CPF</td>
                    <td class = "celula" >telefone</td>
                    <td class = "celula" >genero</td>

                </tr>
            </thead>
            <tbody>
                <?php while ($usuario = $query->fetch_array()) { ?>        
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

            <a href="../sair.php">Sair</a>
            </div>
</body>
</html>