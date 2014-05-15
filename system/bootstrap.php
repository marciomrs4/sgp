<?php
define('DOCROOT',dirname(__FILE__));
define('DS',DIRECTORY_SEPARATOR);


function autoload($class){
	
	$file = str_replace('\\',DS, DOCROOT).DS.$class.'.php';
	
	if(file_exists($file)){
		require_once $file;
	}else{
		echo 'Erro ao Carregar a Classe '.$file;
	}
}

spl_autoload_register('autoload');

echo 'TESTE'

?>