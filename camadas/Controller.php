<?php

require_once("./bean/Usuario.class.php"); // Classe Bean
// trata a sessao
session_start();

//Armazena na variavel $acao o que o sistema esta requisitando (cadastrar, autenticar, excluir, etc)
if (isset($_REQUEST["acao"])) {
    $acao = $_REQUEST["acao"];
} else {
    $acao = null;
}
   
   
require_once("./bean/MeuCarrinho.class.php"); // Classe Bean
require_once("./bean/Produto.class.php"); // Classe Bean
//Baseado no que foi solicitado, trata a tarefa, e depois redireciona para a View a resposta
switch ($acao) {
    case 'login': {
           header('location: ../formlogin.php');
           exit;  
        }
        break; 
    case 'autenticar': {
            // Se for autenticar, receber login e senha.
            //Primeiro instanciamos um objeto da classe Bean, para setar os valores informados no formul�rio
            $usuario = new Usuario();

            /* Agora setamos para a Bean os valores informados,pois ser�o validados na camada DAO, que 
              ir� verificar a consistencia dos dados em um Banco de Dados: MySQL, XML, ou qualquer outra base de dados; e depois retornar para a controller o resultado. */
            $usuario->setLogin($_REQUEST["login"]);
            $usuario->setSenha($_REQUEST["senha"]);

            if ($usuario->getLogin() == 'admin' && $usuario->getSenha() == '123') {
                $_SESSION['login'] = $usuario->getLogin();
                header('location: ./view/homepage.php');
                exit;
            } else {

                header('location: ../formlogin.php?msg=Usuario ou Senha Invalida!');
                exit;
            }
        }
        break;
        
    case 'excluir': {
       
        $id_excluir= $_GET['id_car'];   
        
        
        require_once('./view/mysqli_connect.php');
            
        // $sql_excluir="DELETE FROM `carrinho` WHERE `carrinho`.`id_carrinho` = '$id_excluir'";
        // $resp_excluir= @mysqli_query($conexao,$sql_excluir);
    
        // if($resp_excluir){ 
        //      echo '<script>alert("ELIMINADO")</script> ';
          
        //     }else{
        //     echo"erro";
        //   echo mysqli_error($conexao);
        // }
            echo '<a href="./view/carrinho.php">carrinho </a>';
        //   require_once('./view/carrinho.php');
            exit;
        }
        break;
        
    case 'homepage': {
        
        header('location: ./view/homepage.php');
        exit; 
    }
        break;
 
    case 'adicionar': {

        require_once('./view/mysqli_connect.php');
         
        $id_add= $_GET['id_prod'];
        $nome_add= $_GET['nome_prod'];
        $preco_add= $_GET['preco_prod'];
        $quant_add= 1;
        $subtotal_add= $preco_add*$quant_add;  
      
       
        
        // $sql_add="INSERT INTO `carrinho` (`id_carrinho`, `nome`, `quantidade`, `preco`, `subtotal`) VALUES (13, '$nome_add', '$quant_add', '$preco_add', '$subtotal_add')";
        // $resp_add= @mysqli_query($conexao,$sql_add);
        
        // if($resp_add){ 
        //      echo '<script>alert("ADCIONADO")</script> ';
          
        // }else{
        //     echo"erro";
        //       echo mysqli_error($conexao);
        // }
        //  
            // echo '<a href="./view/homepage.php">home </a>';
       
            exit;
      
    }
        break;
        

    default:
        echo "<h1>Erro de acao não esperado ";
        return null; //Por padr�o, esse switch n�o retorna nada.
}
?>