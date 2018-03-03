<?php 
/*
	Para criar a estrutura do PHP OO foi utilizado:
	https://krishnaxavier.github.io/creator-oop-structure/
*/
class DB{
	protected $host; 
	protected $dbname; 
	protected $user; 
	protected $password;
	private $con;	

	public function __construct(){
		$this->host = 'localhost';
		$this->dbname = 'super-mercado';
		$this->user = 'root';
		$this->password = '';
	}

	public function connect(){
		try{
			$this->con = new PDO(
				'mysql:host=' . $this->host . 
				';dbname='.$this->dbname.'',
				$this->user, 
				$this->password, 
				array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8")				
			);

			return true;
		}
		catch ( PDOException $e ){
			echo utf8_encode('failed connection, error: ' . $e->getMessage());

			return false;			
		}

	}

	public function getCon(){
		return $this->con;
	}	

	private function getHost(){ 
		return $this->host; 
	} 
	private function setHost($host){ 
		$this->host = $host; 
	} 
	private function getDbname(){ 
		return $this->dbname; 
	} 
	private function setDbname($dbname){ 
		$this->dbname = $dbname; 
	} 
	private function getUser(){ 
		return $this->user; 
	} 
	private function setUser($user){ 
		$this->user = $user; 
	} 
	private function getPassword(){ 
		return $this->password; 
	} 
	private function setPassword($password){ 
		$this->password = $password; 
	} 

}