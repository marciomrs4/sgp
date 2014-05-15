<?php

$toke =  uniqid(rand(1,100),true);


$array = hash_algos();

foreach ($array as $key => $valor):

$hash =  hash($valor, $toke);

echo 'Resultado do Hash: ',$hash,'Nome do Algoritimo: ', $valor, ' Tamanho da String: ',strlen($hash),'<br />';

endforeach;

/*

echo $hash,'<br>';

echo $array[$posicao],'<br>';

echo strlen($hash);


echo '<pre>';
print_r(hash_algos());
echo '</pre>';

/*
include_once '../../bootstrap.php';

include '../../componente/topo.php';
include '../../componente/menuprincipal.php';


$acao = $_GET['action'];
echo $acao.'.php';

use system\entity\Portaria;

$obj = new Portaria();

echo $obj->setName('Este é o Index')->getName();


//include_once 'forms/'.$acao.'.php';


include '../../componente/rodape.php';
*/
?>