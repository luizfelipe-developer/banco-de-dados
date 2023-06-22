<?php
    include "conexao.php";
    include "qtd_limite.php";



    if(empty($_GET['pagina'])){
        $pagina=1;
    }else{
        $pagina = $_GET['pagina'];
    }
    


    $id_inicio = ($pagina * $limite) - $limite;

        $sql = "SELECT * FROM `clientes` LIMIT $id_inicio, $limite";
        $query = $conexao->query($sql);

        /*
        $msg = 'Registros encontrados: '.$query->num_rows;
        echo $msg;
        */
        $sql_todos = "SELECT * FROM `clientes`";
        $qualy_todos = $conexao->query($sql_todos);
        $tot_registros = $qualy_todos->num_rows;

        $paginaFim = ceil($tot_registros/$limite);
        //echo "pagina fim: ".$paginaFim;
        //echo "total reg ".$tot_registros;
      
    /*while ($dados = $query->fetch_array()) {
        echo 'Código: '.$dados['cod_cliente']. '<br>'; 
        echo 'Nome: '.$dados['nome']. '<br>';
        echo 'UF: '.$dados['uf']. '<br>';
        echo 'Cidade: '.$dados['cidade']. '<br>'.'<br>';    
    }*/
    

?>