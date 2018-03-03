<?php

/* config */
$validURLs = ['produto'];

/* verbos http: http://www.restapitutorial.com/lessons/httpmethods.html */
$validMethods = ['POST', 'GET', 'PUT', 'PATCH', 'DELETE'];

$response = [];

if(isset($_SERVER['REQUEST_METHOD']) && isset($_SERVER['QUERY_STRING']) && in_array($_SERVER['REQUEST_METHOD'], $validMethods) ){
	$request = [];
	$request['method'] = $_SERVER['REQUEST_METHOD'];
	$request['queryString'] = $_SERVER['QUERY_STRING'];

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

		$response['response'] = $out;
		$response['request'] = $request;

	}else{
		$response['response'] = false;
	}

}else{	
	$response["erro"] = true;
}

echo json_encode( $response );