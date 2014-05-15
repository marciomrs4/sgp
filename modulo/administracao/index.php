<?php

define('DS', DIRECTORY_SEPARATOR);

require_once '..'.DS.'..'.DIRECTORY_SEPARATOR.'bootstrap.php';

include '..'.DIRECTORY_SEPARATOR.'..'.DIRECTORY_SEPARATOR.'componente/topo.php';
include '..'.DIRECTORY_SEPARATOR.'..'.DIRECTORY_SEPARATOR.'componente/menuprincipal.php';


include '..'.DIRECTORY_SEPARATOR.'..'.DIRECTORY_SEPARATOR.'modulo/administracao/ModuloAdministracao.php';

use Respect\Validation;

use system\entity\Portaria;
use Respect\Validation\Validator as v;
use Respect\Validation\Exceptions\EmailException;
use Respect\Validation\Exceptions\StringException;

$Portaria = new Portaria();

print_r($Portaria->setName($_POST)->getName());



/*
try {


	v::string()->email()->notEmpty()->alnum()->setName("Doca")->assert($_POST["doca"]);
	
	
} catch (Exception $e) {
	
	$errors = $e->findMessages(array(
			'string' => 'Ao tentar inserir {{name}} houve um erro de String',
			'email'  => 'O valor {{input}} não é um email valido',
			'notEmpty' => 'O valor {{input}} não pode ser vazio',
			'alnum' => 'o valor {{input}} tem ser alfanumerico'
	));
	
	
	echo $e->getMainMessage().'<br />';

	echo $errors['string'].'<br />';
	echo $errors['email'].'<br />';
	echo $errors['alnum'].'<br />';	
	echo $errors['notEmpty'];
	
	echo $e->getFullMessage($errors);
	
	
/*	
	$errors = $e->findMessages(array(
		'string' => '{{name}} Erro de String',
		'email'  => '{{name}} Erro de email'
	));
	
	echo $errors['string'];
	echo $errors['email'];
	
}
*/

include_once 'forms/cadastrar/doca.php';


include '../../componente/rodape.php';
?>