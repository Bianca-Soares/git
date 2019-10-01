<?php

   session_start();
 
if((!isset ($_SESSION['login']) == true) ){
    unset($_SESSION['login']);
    header('location:../../formlogin.php');

}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Homepage </title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
         
        <!-- Linkando o arquivo de formatação do conteudo - layout.css -->
        <link href="../../css/layout.css" rel="stylesheet" type="text/css" />
       
    </head>
    <body>

        <nav class="navbar navbar-ligth">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>                        
                    </button>
                    <a class="navbar-brand" href="#"></a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav">
                        <li><a href="#">Login: 
                                <?php
                                if (isset($_SESSION['login'])) {
                                    echo $_SESSION['login'];
                                } else {
                                    echo "ANONIMO";
                                }
                                ?>
                            </a>
                        </li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="../Controller.php?acao=login"><span class="glyphicon glyphicon-log-in"> 
                                </span> Login </a></li>
                    </ul>
                </div>
            </div> 
        </nav>

        <div class="container-fluid text-center"> 
          <section id="home"> 
                <h1 class="text-left">Home
                </h1>
                <img class="text-right"  id="logoCar" src="https://www.fastanastore.com/assets/images/empty-cart.png" >
 
                <a href="../view/carrinho.php">
                     <span> 
                      <button type="button" class="btn btn-primary">Consultar Carrinho</button>
                    </span> 
                </a> 
            <div class="row content">
                <div class="col-sm-8 text-left"> 
<?php
require_once("../bean/Produto.class.php"); // Classe Bean


            require_once('./mysqli_connect.php');
            
            $query = "SELECT * FROM produto";
            $resp = @mysqli_query($conexao, $query);
    
        if($resp){    
                
            echo '<table class="table">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Produto</th>
                  <th scope="col">Preço</th>
                  <th scope="col">      </th>
                </tr>
              </thead>';
             
              $meuProduto = new Produto();
              
            while($row = mysqli_fetch_array($resp)){
                
                // $arr = array(1, 2, 3, 4);
                // foreach ($arr as &$value) {
                //   $value = $value * 2;
                //     }
                
                $meuProduto->setId_produto($row['id_produto']);
                
                $meuProduto->setNome($row['nome']);
                $meuProduto->setPreco($row['preco']);

                echo'<tbody> <tr> <th scope="row">'.
                $row['id_produto'].'</th> <td>'.
                $row['nome'].'</td> <td>'.
                $row['preco'].'</td> <td>'.
                
                
                 '<a href="./adicionar.php?id_prod='.$meuProduto->getId_produto() .'&nome_prod='.$meuProduto->getNome().'&preco_prod='.$meuProduto->getPreco().'">
                    <span>
                      <button type="button" class="btn btn-primary">Adicionar ao Carrinho</button>
                    </span> 
              
                    </a> 
                  </td>
                </tr>
                </tbody>' ;
               
            }    
               echo '</table>'
        
               ;
           
         }else{
           echo"erro";
           echo mysqli_error($conexao);
    }
 
    mysqli_close($conexao);
 ?>
  
                </div>
            </div>
          </section>
        </div>

        <footer class="container-fluid text-center">
            <p>Footer Text</p>
        </footer>

    </body>
</html>


