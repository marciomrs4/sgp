<?php

define('DS', DIRECTORY_SEPARATOR);

require_once '..'.DS.'..'.DIRECTORY_SEPARATOR.'bootstrap.php';

include '..'.DIRECTORY_SEPARATOR.'..'.DIRECTORY_SEPARATOR.'componente/topo.php';
include '..'.DIRECTORY_SEPARATOR.'..'.DIRECTORY_SEPARATOR.'componente/menuprincipal.php';


include '..'.DIRECTORY_SEPARATOR.'..'.DIRECTORY_SEPARATOR.'modulo/administracao/ModuloAdministracao.php';


use Respect\Validation\Validator as v;

try {

$validate = new v();	
$validate->string()
		 ->email()
         ->setName('Doca')
		 ->setTemplate('Estas Regras devem ser seguidas para o campo: {{name}}')
		 ->assert($_POST["doca"]);			

$validate2 = new v();
$validate2->string()
		  ->notEmpty()
		 ->setName('Descricao')
		 ->setTemplate('Estas regras devem ser seguidas no campo: "{{name}}"')
		 ->assert($_POST['descricao']);
	
} catch (Exception $e) {
		
		echo $e->getMainMessage().'<br />';
		
		$erros = $e->findMessages(array(
			'string' => 'Este campo deve conter um Texto {{input}}',
			'email'  => 'O valor {{name}} não é um email valido',
			'notEmpty' => 'O valor {{input}} não pode ser vazio',
			'alnum' => 'o valor {{input}} tem ser alfanumerico'
	));
		
		foreach ($erros as $nome){
			if($nome){
				echo $nome,'<br />';				
			}

		}
	

}


include_once 'forms/cadastrar/doca.php';


include '../../componente/rodape.php';
?>