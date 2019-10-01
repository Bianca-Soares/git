<?php
class Produto{
    
    private $id_produto;
    private $nome;
	private $preco;

	
	//Id
	function getId_produto(){
		return $this -> id_produto;
	}
	function setId_produto($valor){
		$this -> id_produto = $valor;	
	}
	
	//Nome
	function getNome(){
		return $this -> nome;
	}
	function setNome($valor){
		$this -> nome = $valor;	
	}
	
	//Preco
	function getPreco(){
		return $this -> preco;
	}
	function setPreco($valor){
		$this -> preco = $valor;	
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