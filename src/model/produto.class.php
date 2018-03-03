<?php

class Produto extends DB{	

	public function getProduto(){
		
		$return = [];
		
		$this->connect();

		$query = $this->getCon()->query("SELECT * FROM produto");

		while($result=$query->fetch(PDO::FETCH_ASSOC)){
			$return[] = $result;
		}

		return json_encode($return);

	}

	public function getProdutoById($id){
		$return = [];		
		
		$this->connect();		

		$query = $this->getCon()->query("SELECT * FROM produto WHERE id = $id");	

		$return[] = $query->fetch(PDO::FETCH_ASSOC);		

		return json_encode($return);
	}

	public function createProduto($produto = []){

		$this->connect();		

		$query = $this->getCon()->query("
			INSERT INTO produto
				(id, nome, valor, tipo) 
				VALUES 
				(NULL, '".$produto['nome']."', '".$produto['valor']."', '".$produto['tipo']."')
		");	


		return $produto;

	}

	public function deleteProduto($id){

		$this->connect();		

		$query = $this->getCon()->query("DELETE FROM produto WHERE id = $id");		

	}
}