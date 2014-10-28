<?php
include_once '../../bootstrap.php';

include '../../componente/topo.php';
include '../../componente/menuprincipal.php';


include '../../modulo/portaria/ModuloPortaria.php';

use system\app\Arquivo;


Arquivo::includeForm();


include '../../componente/rodape.php';
?>