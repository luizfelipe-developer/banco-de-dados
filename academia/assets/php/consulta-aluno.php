<?php
    include "conexao.php";
    
    if(mysqli_connect_error())
    trigger_error(mysqli_connect_error());


        
        $sql = "SELECT * FROM `alunos` ";
        $query = $conexao->query($sql);
        $msg = $query->num_rows;
        

    /*while ($dados = $query->fetch_array()) {
        echo 'Código: '.$dados['cod_cliente']. '<br>'; 
        echo 'Nome: '.$dados['nome']. '<br>';
        echo 'UF: '.$dados['uf']. '<br>';
        echo 'Cidade: '.$dados['cidade']. '<br>'.'<br>';    
    }*/
    

?>