  $id_add= $_GET['id_prod'];
          echo '<a href="./view/homepage.php">home </a>';
         echo $id_add;
        // INSERT INTO `carrinho` (`id_carrinho`, `nome`, `quantidade`, `preco`, `subtotal`) VALUES (NULL, 'TV-Andoid', '3', '400.00', '400.00')
 
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
             
         
             
                '<a href="../Controller.php?acao=excluir&id_car=   '.$meuCarrinho->getId_carrinho().'  ">  
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

case 'calcular': {
            $calc = new Calculadora();
            $op = $_REQUEST["operacao"];
            $n1 = $_REQUEST["n1"];
            $n2 = $_REQUEST["n2"];
            $resp = 0;
            switch ($op) {
                case "soma" :
                    $resp = $calc->soma($n1, $n2);
                    break;
                case "sub" :
                    $resp = $calc->sub($n1, $n2);
                    break;
                case "div" :
                    $resp = $calc->div($n1, $n2);
                    break;
                case "mult" :
                    $resp = $calc->mult($n1, $n2);
                    break;
                default:
                    break;
            }
            // formata a resp e redireciona para a visão
            $resp = "RESULTADO ($n1 $op $n2)= " . $resp;
            header('location: ./form-calculadora.php?msg=' . $resp);
            exit;
        }
        break;