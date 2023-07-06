<?php 
session_start();
//virifica se a sessão "online" foi criada.
if (!isset($_SESSION['online'])) {
    header('Location: ../index.php');
} else {
    $user = $_SESSION['nomeUsu'];
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
</head>
<body>
    <h1>Olá, 
        <?php 
           echo $user;
        ?>, você está logado!
    </h1>
    <a href="../php/sair_sessao.php">Sair</a>
</body>
</html>