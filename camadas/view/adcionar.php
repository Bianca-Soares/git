<?php
require_once('./homepage.php');
 require_once('./mysqli_connect.php');
         
        $id_add= $_GET['id_prod'];
        $nome_add= $_GET['nome_prod'];
        $preco_add= $_GET['preco_prod'];
        $quant_add= 1;
        $subtotal_add= $preco_add*$quant_add;  
      
       
        
        // $sql_add="INSERT INTO `carrinho` (`id_carrinho`, `nome`, `quantidade`, `preco`, `subtotal`) VALUES (NULL, '$nome_add', '$quant_add', '$preco_add', '$subtotal_add')";
        // $resp_add= @mysqli_query($conexao,$sql_add);
        
        // if($resp_add){ 
        //      echo '<script>alert("ADCIONADO")</script> ';
          
        // }else{
        //     echo"erro";
        //       echo mysqli_error($conexao);
        // }
        //  
           