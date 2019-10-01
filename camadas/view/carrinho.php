
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Carrinho</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        
        <!-- Linkando o arquivo de formatação do conteudo - layout.css -->
        <link href="../../css/style.css" rel="stylesheet" type="text/css" />
       
    </head>
    <body>


        <div class="container-fluid text-center">    
            <div class="row content">
                <div class="col-sm-2 sidenav">
 
                </div>
                <div class="col-sm-8 text-left"> 
                    <h1>Carrinho</h1>
                    <a href="../Controller.php?acao=homepage"> <button type="button" class="btn ">Home</button></a>
                   
                   
                    <hr>
    <section id="home">                
        <div class="row content">
          <div class="col-sm-8 text-left"> 
    <?php
require_once("../bean/MeuCarrinho.class.php"); // Classe Bean
           
            
            require_once('./mysqli_connect.php');
            
            $query = "SELECT * FROM carrinho";
            $resp = @mysqli_query($conexao, $query);
    
        if($resp){    
                
            echo '<table class="table">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Produto</th>
                  <th scope="col">Quantidade</th>
                  <th scope="col">Preço</th>
                  <th scope="col">Subtotal</th>
                </tr>
              </thead>';
              
               $meuCarrinho = new MeuCarrinho();
               
            while($row = mysqli_fetch_array($resp)){
                 
                $meuCarrinho->setId_carrinho($row['id_carrinho']);
                
                $meuCarrinho->setNome($row['nome']);
                $meuCarrinho->setQuantidade($row['quantidade']);
                $meuCarrinho->setPreco($row['preco']);
                $meuCarrinho->setSubtotal($row['subtotal']);
                
             
                echo'<tbody> <tr> <th scope="row">'.
                $row['id_carrinho'].'</th> <td>'.
                $row['nome'].'</th> <td>'.
                $row['quantidade'].'</th> <td>'.
                $row['preco'].'</td> <td>'.
                $row['subtotal'].'</td> <td>'.
             
         
             
                '<a href="../Controller.php?acao=excluir&id_car='.$meuCarrinho->getId_carrinho().'  ">  
                    <span> 
                      <button type="button" class="btn btn-primary">Excluir</button>
                    </span> 
                 
                </a> 
                </td>
                
                </tr>
                </tbody>
                
                ' ;
            }    
               echo '</table>';
               
         
         }else{
           echo"erro";
           echo mysqli_error($conexao);
    }
         
    mysqli_close($conexao);
 ?>
           
            
          </div>
        </div>
                    
                </div>
                
            </div>
        </div>

        <footer class="container-fluid text-center">
             
        </footer>

    </body>
</html>


