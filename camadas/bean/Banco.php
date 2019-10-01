<?php
 require_once("../init.php");
 
class Banco{
    protected $mysqli;
    public function __construct(){
        $this->conexao();
    }
    private function conexao(){
        $this->mysqli = new mysqli(BD_SERVIDOR, BD_USUARIO , BD_SENHA, BD_BANCO);
    }
    
    //Acesso a tabela carrinho
    public function setCarrinho($nome,$quantidade,$preco,$data){
        $stmt = $this->mysqli->prepare("INSERT INTO livros (`nome`, `autor`, `quantidade`, `preco`, `data`) VALUES (?,?,?,?,?)");
        $stmt->bind_param("sssss",$nome,$autor,$quantidade,$preco,$data);
         if( $stmt->execute() == TRUE){
            return true ;
        }else{
            return false;
        }
    }
    public function getLivro(){
        $result = $this->mysqli->query("SELECT * FROM livros");
        while($row = $result->fetch_array(MYSQLI_ASSOC)){
            $array[] = $row;
        }
        return $array;
    }
    public function deleteLivro($id){
        if($this->mysqli->query("DELETE FROM `livros` WHERE `nome` = '".$id."';")== TRUE){
            return true;
        }else{
            return false;
        }
    }
    public function pesquisaLivro($id){
        $result = $this->mysqli->query("SELECT * FROM livros WHERE nome='$id'");
        return $result->fetch_array(MYSQLI_ASSOC);
    }
    public function updateLivro($nome,$autor,$quantidade,$preco,$flag,$data,$id){
        $stmt = $this->mysqli->prepare("UPDATE `livros` SET `nome` = ?, `autor`=?, `quantidade`=?, `preco`=?, `flag`=?,`data` = ? WHERE `nome` = ?");
        $stmt->bind_param("sssssss",$nome,$autor,$quantidade,$preco,$flag,$data,$id);
        if($stmt->execute()==TRUE){
            return true;
        }else{
            return false;
        }
    }
}
?> 
 
 
 <?php
class Banco{
    
    private $DB_NAME;
    private $DB_HOST;
    private $DB_USER;
    private $DB_PASSWORD;
	private $preco;

	
	//DB_NAME
	function getId_DB_NAME(){
		return $this -> id_DB_NAME;
	}
	function setId_DB_NAME($valor){
		$this -> id_DB_NAME = $valor;	
	}
  
	//DB_HOST
	function getId_DB_HOST(){
		return $this -> id_DB_HOST;
	}
	function setId_DB_HOST($valor){
		$this -> id_DB_HOST = $valor;	
	}
	
	//DB_USER
	function getId_DB_USER(){
		return $this -> id_DB_USER;
	}
	function setId_DB_USER($valor){
		$this -> id_DB_USER = $valor;	
	}
	
	//DB_PASSWORD
	function getId_DB_PASSWORD(){
		return $this -> id_DB_PASSWORD;
	}
	function setId_DB_PASSWORD($valor){
		$this -> id_DB_PASSWORD = $valor;	
	}
	
	//DB_NAME
	function getId_DB_NAME(){
		return $this -> id_DB_NAME;
	}
	function setId_DB_NAME($valor){
		$this -> id_DB_NAME = $valor;	
	}
}
 ?>