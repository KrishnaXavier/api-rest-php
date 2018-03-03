<?php 

require_once "../model/db.class.php";

$DB = new DB('localhost', 'super-mercado', 'root', '');

if($DB->connect()){	

	$query =  $DB->getCon()->query('SELECT * FROM produto');
	
	while($result=$query->fetch(PDO::FETCH_ASSOC)){
		var_dump($result);
	}	


}else{
	echo "impossivel conectar";
}