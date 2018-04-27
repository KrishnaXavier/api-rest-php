<?php

/* arquivos */
require_once "model/core.php";

/* config */
$validURLs = ['produto'];

/* verbos http: http://www.restapitutorial.com/lessons/httpmethods.html */
$validMethods = ['POST', 'GET', 'PUT', 'PATCH', 'DELETE'];

$response = [];


if(isset($_SERVER['REQUEST_METHOD']) && isset($_SERVER['QUERY_STRING']) && in_array($_SERVER['REQUEST_METHOD'], $validMethods) ){
	
	$request = [];
	$request['method'] = $_SERVER['REQUEST_METHOD'];
	$request['queryString'] = $_SERVER['QUERY_STRING'];
	//$request['acao'] = $_POST['acao'];
	//$request['acao'] = isset($_POST) ? $_POST['acao'] : "DELETE ou GET";

	$query = explode("/", $request['queryString']);
	foreach ($query as $key => $value) {

		if(in_array($value, $validURLs)){
			$request['class'] = $value;
			$request['id'] = isset($query[$key+1]) ? $query[$key+1] : "all";		
			break;
		}
		
	}

	if(isset($request['class']) && isset($request['id'])){
		$out = [];
		$out['status'] = true;		

		/* produto */
		if($request['class'] == 'produto'){

			$produto = new Produto();

			/* GET */
			if($request['method'] == 'GET'){
				if($request['id'] == 'all'){
					$out['produtos'] = $produto->getProduto();
				}else{
					$out['produto'] = $produto->getProdutoById(intval($request['id']));
				}
			}

			/* POST */
			elseif($request['method'] == 'POST' && $_POST['acao'] == 'insert'){
				if(isset($_POST['nome']) && isset($_POST['valor']) && isset($_POST['tipo'])){

					$out['produto'] = $produto->createProduto($_POST);
					
				}else{
					$response["erro"][] = 'product creation failed, report all attributes';		
				}			
			}

			/* DELETE */
			elseif($request['method'] == 'DELETE'){			
				$out['produto'] = $produto->deleteProduto($request['id']);
			}


			/* PATCH */
			elseif($request['method'] == 'POST' && $_POST['acao'] == 'update'){
				if(isset($_POST['nome']) && isset($_POST['valor']) && isset($_POST['tipo']) && isset($request['id']) ){	
					$_POST['id'] = $request['id'];
					$out['produto'] = $produto->updateProduto($_POST);					

				}else{
					$response["erro"][] = 'product update failed, report all attributes';		
				}	
				
			}


		}else{
			$response["erro"][] = 'class not found';
		}

		$response['response'] = $out;
		$response['request'] = $request;

	}else{
		$response["erro"][] = 'class or id not set';
		$response['response'] = false;
	}

}else{	
	$response["erro"][] = 'invalid request: method not set or not valid or query string invalid';
}

echo json_encode( $response, JSON_UNESCAPED_UNICODE );