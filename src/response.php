<?php 
//var_dump($_SERVER);

$request = [];
$request['method'] = $_SERVER['REQUEST_METHOD'];
$request['queryString'] = $_SERVER['QUERY_STRING'];

echo json_encode($request);