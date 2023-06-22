<?php
    include "conexao.php";
    $dados = $_GET['search'];

    
   
    if (empty($_GET['search'])) {
        $sql = "SELECT * FROM `clientes` ";
        $query = $conexao->query($sql);
        
    } else {
        $sql = "SELECT * FROM `clientes` WHERE nome LIKE '%$dados%' OR cod_cliente LIKE '$dados' OR cidade LIKE '%$dados%' ";
        $query = $conexao->query($sql);
    }
        $msg = $query->num_rows;
        mysqli_close($conexao);


        

        /*
        $msg = 'Registros encontrados: '.$query->num_rows;
        echo $msg;
        */
        

    /*while ($dados = $query->fetch_array()) {
        echo 'Código: '.$dados['cod_cliente']. '<br>'; 
        echo 'Nome: '.$dados['nome']. '<br>';
        echo 'UF: '.$dados['uf']. '<br>';
        echo 'Cidade: '.$dados['cidade']. '<br>'.'<br>';    
    }*/
    

?>