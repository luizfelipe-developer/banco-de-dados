<?php
    include ("qtd_limite.php");

    if(isset($_POST['update'])){
    $input_qtd = $_POST['input_qtd'];
   // echo 'input:'.$input_qtd;
        
    $sql = "UPDATE qtd_limite SET qtd_quantidade = $input_qtd WHERE id=1";
    $resultado = $conexao2->query($sql);
}

header("location: index.php")
?>
