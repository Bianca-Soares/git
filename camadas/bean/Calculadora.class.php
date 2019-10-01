<?php
class Calculadora {
    private $resp;
    public function soma($preco, $quantidade) {
        $resp = $resp + ($preco * $quantidade); 
        return $resp;
    
     // redireciona
            
            header('location: ./form-calculadora.php?msg=' . $resp);
            exit;
        
    }
    
}