<?php
$conecta = mysqli_connect("localhost","root","","aula");

$selecao = "SELECT nomeproduto, precounitario, imagempequena FROM produtos";
$produtos = mysqli_query($conecta, $selecao);


$retorno = array();
while($linha = mysqli_fetch_object($produtos)){
	$retorno[] =$linha;
	
}

echo json_encode($retorno);

mysqli_close($conecta);
?>