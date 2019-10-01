<?php

   
        
class MeuCarrinho{
    
    private $id_carrinho;
    private $nome;
	private $quantidade;
	private $preco;
	private $subtotal;
	
	//Id
	function getId_carrinho(){
		return $this -> id_carrinho;
	}
	function setId_carrinho($valor){
		$this -> id_carrinho = $valor;	
	}
	
	//Nome
	function getNome(){
		return $this -> nome;
	}
	function setNome($valor){
		$this -> nome = $valor;	
	}
	
	//quantidade
	function getQuantidade(){
		return $this -> quantidade;
	}
	function setQuantidade($valor){
		$this -> quantidade = $valor;	
	}
	
	//Preco
	function getPreco(){
		return $this -> preco;
	}
	function setPreco($valor){
		$this -> preco = $valor;	
	}
	
	//Subtotal
	function getSubtotal(){
		return $this -> subtotal;
	}
	function setSubtotal($valor){
		$this ->subtotal = $valor;	
	}

// function RemoverItem($codigo) 
//     {
//         // //Inicializando parametro
//         // $posicao = -1; 
//         // $achou = $this->ObtemPosicao($codigo,$posicao);
//         // if ($achou){
//         //     //Removendo o elemento do vetor
//         //     array_splice($this->item_codigo, $posicao, 1);
//         //     array_splice($this->item_quantidade, $posicao, 1);        
//         }
        
function addItem($item, $num) {
    $this->itens[$item] = $num;
}

function RemoverItem($item, $num) {
    if ($this->itens[$item] > $num) {
        $this->itens[$item] -= $num;
    return true;
} else {
    return false;
    }
}
}

?>