<?php 

require_once "../model/core.php";

$produto = new Produto('localhost', 'super-mercado', 'root', '');

$listaProduto = $produto->getProduto();

echo $listaProduto;