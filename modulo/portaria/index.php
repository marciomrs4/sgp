<?php
include_once '../../bootstrap.php';

include '../../componente/topo.php';
include '../../componente/menuprincipal.php';


include '../../modulo/portaria/ModuloPortaria.php';


$acao = $_GET['action'];
echo $acao.'.php';

use system\entity\Portaria;

$obj = new Portaria();

echo $obj->setName('Funcionou OK')->getName();


//include_once 'forms/'.$acao.'.php';


include '../../componente/rodape.php';
?>