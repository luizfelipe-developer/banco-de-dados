<?php
include ('conexao.php');
$sql = "SELECT * FROM fotos";
$result = mysqli_query($conn,$sql);

    while ($row = mysqli_fetch_assoc($result)) {
        echo '<img src="imgs/'. $row['caminho'] .'" alt="' . $row['nome'] . '" >';
    }
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header>
        <h1>FOTO DO USUÁRIO </h1>
    </header>
    <div class="container">
        <h2>Carregar Nova Foto</h2>
        <form action="upload.php" method="post" enctype="multipart/form-data" >
            <label for="foto">Selecione uma foto</label>
            <input type="file" id="foto" name="foto" accept="image/*" required ><br><br>

            <label for="nome">Nome do Usuário:</label>
            <input type="text" id="nome" name="nome" placeholder="Fulano da Silva" required ><br><br>

            <button type="submit" name="upload">Carregar</button>
        </form>
    </div>
</body>
</html>
