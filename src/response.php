<?php

/* config */
$validURLs = ['produto'];

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

echo json_encode($request);