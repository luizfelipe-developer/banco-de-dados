<?php

        include "conexao.php";

        if(empty($_GET['pagina'])){
        $pagina=1;
        }else{
        $pagina = $_GET['pagina'];
        }


        if(!empty($_GET['quantidade'])){
        $quantidade = $_GET['quantidade'];
        
        }else{
        $quantidade = 5; 
        }


        $limite= $quantidade;
        $id_inicio = ($pagina * $limite) - $limite;

        $sql = "SELECT * FROM `clientes` LIMIT $id_inicio, $limite ";              // pagina  * limite  -  limite
        $query = $conexao->query($sql);
    
        /*
        $msg = 'Registros encontrados: '.$query->num_rows;
        echo $msg;
        */
        $sql_todos = "SELECT * FROM `clientes` ";
        $qualy_todos = $conexao->query($sql_todos);
        $tot_registros = $qualy_todos->num_rows;

        $paginafim = ceil($tot_registros/$limite);
        // echo "pagina fim!".$paginafim;
        //echo "total reg".$tot_registros;

        $msg = $query->num_rows;        

        /*while ($dados = $query->fetch_array()) {
        echo 'Código: '.$dados['cod_cliente']. '<br>'; 
        echo 'Nome: '.$dados['nome']. '<br>';
        echo 'UF: '.$dados['uf']. '<br>';
        echo 'Cidade: '.$dados['cidade']. '<br>'.'<br>';    
        }*/
?>