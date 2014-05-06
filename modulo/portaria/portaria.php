<?php
include '../../componente/topo.php';
include '../../componente/menuprincipal.php';


include '../../modulo/portaria/ModuloPortaria.php';


$acao = $_GET['action'];
echo $acao.'.php';

include_once 'forms/'.$acao.'.php';


include '../../componente/rodape.php';
?>