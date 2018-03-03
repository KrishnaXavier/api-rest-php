<?php

class Produto extends DB{	

	public function getProduto(){
		
		$return = [];
		
		$this->connect();

		$query = $this->getCon()->query('SELECT * FROM produto');

		while($result=$query->fetch(PDO::FETCH_ASSOC)){
			$return[] = $result;
		}

		return json_encode($return);

	}
}