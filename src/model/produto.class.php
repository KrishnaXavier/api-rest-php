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
}