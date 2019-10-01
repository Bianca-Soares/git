 <?php

        $id_excluir= $_GET['id_car'];   
        
        
        require_once('./mysqli_connect.php');
            
        // $sql_excluir="DELETE FROM `carrinho` WHERE `carrinho`.`id_carrinho` = '$id_excluir'";
        // $resp_excluir= @mysqli_query($conexao,$sql_excluir);
    
        // if($resp_excluir){ 
        //      echo '<script>alert("ELIMINADO")</script> ';
          
        //     }else{
        //     echo"erro";
        //   echo mysqli_error($conexao);
        // }
            // echo '<a href="./view/carrinho.php">carrinho </a>';
           require_once('./carrinho.php');
            exit;